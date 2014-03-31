<tr class='clr'>
    <input type="hidden" readonly value="<?php echo $order_no; ?>" name="<?php echo $order_no.'orderno';  ?>" class="noborder" />
    <td>
      <?php echo $item_name; ?>
      <input type="hidden" value="<?php echo $item_name; ?>" name="<?php echo $order_no.'item_name';  ?>" class="noborder" />
    </td>
    <td class="qty"  Iid="<?php echo $order_no.'total_price'; ?>" qid="<?php echo $order_no.'qty';  ?>" id="<?php echo $order_no.'qty';  ?>" ordername="<?php echo $item_type; ?>"      itemname="<?php echo $item_name; ?>" itmprice="<?php echo $total_price;  ?>">
      <input  type="text" value="<?php echo "1";  ?>" name="<?php echo $order_no.'quantity';  ?>" class="qty_size" />
    </td>
    <td id="<?php echo $order_no.'total_price';  ?>" class="order_amount">
            &nbsp;&nbsp;&nbsp;&nbsp;<input readonly type="text" value="<?php echo $total_price; ?>" id="<?php echo $order_no.'amount'; ?>"
            name="<?php echo $order_no.'price';  ?>" class="noborder om qty_size" />
    </td>
    <input type="hidden" value="<?php  echo $item_type; ?>" name="<?php echo $order_no.'type'?>" /> 
    <td><button class="delete-button"><img src="../img/delete.jpg"></button></td>
  </tr> 
<input type="hidden" value="<?php echo $order_type; ?>"  id="order_name"/>
<input type="hidden" value="<?php echo $itemname; ?>"  id="order_itm"/>
<input type="hidden" value="<?php echo $order_no; ?>"  id="order_number"/>
<input type="hidden" value="" id="total_amt" />
<script type="text/javascript">
$(document).ready(function(){
 var m=$('#amt').html();
 total=0;
 var total_amount = 0;
 $('.order_amount').each(function(i){
  
          var value = $(this).find('input').val()
           total += parseInt(value);
           totamt=total+ parseInt(total*0.15);
 });
$('#amt').html(total);
$('#totamt').html(totamt);

 $('.qty').each(function (){
  $(this).bind('change',function(){
        i=$(this).attr('Iid');
        n=$(this).attr('qid');
        a=$('#'+n+' input').val();
        item_qty = a;
        name = $(this).attr('ordername');
        itm=$(this).attr('itemname');
        itemprice=$(this).attr('itmprice');
        data = "item_qty="+item_qty+'&name='+name+'&item_name='+itm+'&price='+itemprice;
        url='sellprice';
        $.ajax({
         url:url,
         data:data,
         dataType:'JSON',
         type:'post',
         success:function(response){
            $('#'+i+' input').attr('value',response);
             total = 0;
            $('.order_amount').each(function(){
            var value = $(this).find('input').val()
            total += parseInt(value);
            totamt=total+ parseInt(total*0.15);
          });
          $('#amt').html(total);
          $('#totamt').html(totamt);
         },
         error:function(response){}
         
        });
   });
 });

      $('tr button').on('click',function(){
            $(this).closest("tr").remove();
            amt=$('#amt').html();
            alert(amt);
            tamt=0;

            total = 0;
            if(amt==0)
            {
                  alert("hi");
                 $('#totamt').html(tamt);  
            }
            else
            {
            $('.order_amount').each(function(){
                 
                 var value = $(this).find('input').val();
                 total += parseInt(value);
                 totamt=total+ parseInt(total*0.15);
            });
              
              $('#amt').html(total);
              $('#totamt').html(totamt);
            }

        }); 

}); 
</script>
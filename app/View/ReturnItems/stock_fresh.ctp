<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script> 
<script>
  $().ready(function() {
      $("#stock_returnStockReturnForm").validate({
      });
  });
  $.validate();
</script>
<?php  if(!empty($db_data)) {
  echo "<h1><b>Take Return :</b></h1>";
?>
          <?php
              echo $this->Form->create('stock_return',array('url'=>array('controller'=>'ReturnItems',
                                        'action'=>'fresh_return')));
              $i=0;
              echo "<table class='table table-hover'>";
              echo "<tr class='info'><th>OrderID</th><th>Item</th><th style='width: 150px;'>Received quantity</th>
              <th style='width: 200px;'>Return Quantity</th></tr>";
              foreach ($db_data as $key => $value) {
              //echo "<pre>";  print_r($value);exit;
                $nm=$name;
                $v1=$order_id;
                $v2=$value[$name]['item_name'];
                $v5=$return_type;
                if($v5=="customer")
                {
                  $v3=$value[$name]['item_quantity'];  
                } 
                else 
                {
                  $v3=$value[$name]['quantity'];
                }

                $v4=$value[$name]['type'];
                
                ?>
                <tr>
                <td>
                  <label><?php echo $order_id;  ?></label>
                </td>
                <td>
                  <label><?php echo $v2;  ?></label>
                </td>
                <td>
                  <label><?php echo $v3;  ?></label>
                </td>
                <td>
                <?php echo $this->Form->input($i.'.return_qty', array('type' => 'text', 'label'=>false,
                                    'class'=>'required rqtyinput','data-validation'=>'number'));?>
              </td>
              <?php echo $this->Form->input($i.'.order_id',array('type'=>'hidden','value'=>$v1)); ?>
              <?php echo $this->Form->input($i.'.item_name',array('type'=>'hidden','value'=>$v2)); ?>
              <?php echo $this->Form->input($i.'.delivered_qty',array('type'=>'hidden','value'=>$v3)); ?>
              <?php echo $this->Form->input($i.'.type',array('type'=>'hidden','value'=>$v4)); ?>
              <?php echo $this->Form->input($i.'.type1',array('type'=>'hidden','value'=>$v5)); ?>

         

            <?php $i++; echo "</tr>";} echo"</table>"; ?>
            <input type="submit" value="Submit" class='submitbtn btn4 btn-success btn2'> 
            <?php echo $this->Form->end();?>
<?php } else {?>
             <div>Please Insert Valid Order ID.</div>

             <?php }?>


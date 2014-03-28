<?php
	$name=$item_name;
	foreach ($list as $key => $value) {
?>		<div class="item" d-val="<?php echo $value[$name]['item_name']?>" style="width: 140px; height: 178px; display: -moz-stack;">
		<button class="subitem btn-info menu" value="<?php echo $value[$name]['item_name']?>">
			<?php echo $value[$name]['item_name']; echo "(".$value[$name]['quantity'].")";?>
		 <img src="<?php echo '../'.$value[$name]['path']; ?>" alt="Image" height="90" width="117" class=".subitem" style="margin-top:9px;"> </button>
		<input type="hidden" value="<?php echo $value[$name]['item_name']; ?>"  id="order_name"/>
		<input type="hidden" value="<?php echo $order_no; ?>"  id="order_no"/>
		</div>
	<?php } ?>

<script type="text/javascript">
$('.item').click(function(){
 		item_name = $(this).attr('d-val');
 		orderno=$('#order_no').val();
 		name= $('#order_name').val();
 		data = "item_name="+item_name+'&name='+name+'&order_no='+orderno;
 		url='sell_item';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				orderno++;
 				$('#order_number').val(orderno);
 				$('#order_no').val(orderno);
 				$('.indata table').append(response);
 			},
 			error:function(response){}
 		});

 });
$(".menu").click(function (event) { 
	        event.preventDefault();
	        $('.menu').prop('disabled', false);
	        $(this).prop('disabled', true);
	    });
</script>
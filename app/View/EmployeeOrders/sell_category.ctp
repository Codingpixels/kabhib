<?php
	//$name=$item_name;
	foreach ($list_category as $key => $value) {
?>		<div class="item" d-val="<?php echo $value;?>" style="width: 140px; height: 178px; display: -moz-stack;">
		<button class="subitem btn-info menu" value="<?php echo $value?>">
			 <?php echo $value; ?>
		</button>
		<input type="hidden" value="<?php echo $item_name; ?>"  id="order_name"/>
		<input type="hidden" value="<?php echo $order_no; ?>"  id="order_no"/>
		</div>
	<?php } ?>



<script type="text/javascript">

	$('.subitem').click(function(){
		$('.order-form').empty();
		o_name=$('#order_name').val();
		o_number=$('#order_number').val();
 		category_name = $(this).val();
 		data = "category_name="+category_name+"&o_number="+o_number+"&o_name="+o_name;
 		url='sellajax';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				$('.order-form').append(response);
 			},
 			error:function(response){}
 		});
 });
	
</script>
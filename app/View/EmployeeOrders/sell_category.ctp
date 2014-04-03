<?php
	foreach ($list_category as $key => $value) { ?>
		<div class="item category" d-val="<?php echo $value;?>" style="width: 140px; height: 178px; display: -moz-stack;">
		<button class="subitem btn-info menu" value="<?php echo $key?>">
			 <?php echo $value; ?>
		</button>
		<input type="hidden" value="<?php echo $item_name; ?>"  id="order_name"/>
		<input type="hidden" value="<?php echo $order_no; ?>"  id="order_no"/>
		</div>
<?php } ?>

<script type="text/javascript">
<?php if($no_category_id == '0'){
?>
$(document).ajaxComplete(setTimeout(function(){
	o_name= "<?php echo $item_name; ?>";
	o_number="<?php echo $order_no; ?>";
	category_id = '0';
	data = "category_id="+category_id+"&o_number="+o_number+"&o_name="+o_name;
 	url='sellajax';
	$.ajax({
		url:url,
		data:data,
		dataType:"html",
		type:'post',
		success:function(response){
			o_number++;
			$('#order_number').val(o_number);
			$('.order-form').append(response);
			return false;
		},
		error:function(response){}
	});
}), 100);
<?php	
} else { ?>
	$('.subitem').click(function(){
		$('.order-form').empty();
		o_name=$('#order_name').val();
		o_number=$('#order_no').val();
 		category_id = $(this).val();
 		data = "category_id="+category_id+"&o_number="+o_number+"&o_name="+o_name;
 		url='sellajax';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				o_number++;
				$('#order_number').val(o_number);
 				$('.order-form').append(response);
 			},
 			error:function(response){}
 		});
 });
<?php } ?>	
</script>
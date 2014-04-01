<?php
	foreach ($list as $key => $value) { ?>		
		<div class="item" id="<?php echo $value[$item_type]['item_id']; ?>"style="width: 140px; height: 178px; display: -moz-stack;">
			<button class="subitem btn-info menu" id="<?php echo $value[$item_type]['item_id']; ?>" value="<?php echo $value[$item_type]['item_id']?>" id="item_name">
				<?php echo $value[$item_type]['item_name']; echo "(".$value[$item_type]['quantity'].")";?>
		 		<img src="<?php echo '../'.$value[$item_type]['path']; ?>" alt="Image" height="90" width="117" class=".subitem" style="margin-top:9px;">
		 	</button>
			<input type="hidden" value="<?php echo $order_number; ?>"  id="order_no"/>
			<input type="hidden" value="<?php echo $item_type; ?>"  id="<?php echo $value[$item_type]['item_id']; ?>item_type"/>
			<input type="hidden" value="<?php echo $category_id; ?>"  id="<?php echo $value[$item_type]['item_id']; ?>item_category"/>
		</div>
	<?php } ?>

<script type="text/javascript">
$('.item').click(function(){
		item_id = $(this).attr('id');
		order_no=$('#order_no').val();
 		item_type= $('#'+item_id+'item_type').val();
 		item_category= $('#'+item_id+'item_category');
 		data = "item_id="+item_id+'&item_type='+item_type+'&order_no='+order_no+'&category_id='+item_category;
 		url='sell_item';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				order_number++;
 				$('#order_no').val(order_number);
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
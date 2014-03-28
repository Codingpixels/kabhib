<?php
	foreach ($list as $key => $value) { ?>		
		<div class="item" style="width: 140px; height: 178px; display: -moz-stack;">
			<button class="subitem btn-info menu" value="<?php echo $value[$item_type]['item_name']?>" id="item_name">
				<?php echo $value[$item_type]['item_name']; echo "(".$value[$item_type]['quantity'].")";?>
		 		<img src="<?php echo '../'.$value[$item_type]['path']; ?>" alt="Image" height="90" width="117" class=".subitem" style="margin-top:9px;">
		 	</button>
			<input type="hidden" value="<?php echo $order_number; ?>"  id="order_no"/>
			<input type="hidden" value="<?php echo $item_type; ?>"  id="item_type"/>
			<input type="hidden" value="<?php echo $category_name; ?>"  id="item_category"/>
		</div>
	<?php } ?>

<script type="text/javascript">
$('.item').click(function(){
 		item_name = $('#item_name').val();
 		order_no=$('#order_no').val();
 		item_type= $('#item_type').val();
 		item_category= $('#category_name');
 		data = "item_name="+item_name+'&item_type='+item_type+'&order_no='+order_no+'&item_category='+item_category;
 		url='sell_item';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				//orderno++;
 				/*$('#order_number').val(orderno);
 				$('#order_no').val(orderno);*/
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
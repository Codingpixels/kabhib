$(document).ready(function() {
	$('.order-item').click(function(){
		$('.order-form').empty();
	 		item_name = $(this).val();
	 		data = "item_name="+item_name;
	 		url='existingajax';
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
});

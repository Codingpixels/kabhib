$('.orderitem').bind('change');

$('.order').on('change',function(){
	item_name = $(this).val();
	order_number = $('#order_number').val();
	data = "item_name="+item_name+"&order_number="+order_number;
	url='customerajax';
	$.ajax({
		url:url,
		data:data,
		dataType:"html",
		type:'post',
		success:function(response){
			order_number++;
			$('.orderitem').unbind('change');
 			$('.orderitem option').attr('disabled','disabled');
			$('#order_number').val(order_number);
			$('.order-form').append(response);
		},
		error:function(response){}
	});
});
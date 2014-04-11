$(document).ready(function() {
	$('.submitbtn').click(function(){
	    $('#CustomerSellForm').submit();
	});
    $("#CustomerSellForm").validate();
	$(".brd").click(function (event) { 
	    event.preventDefault();
	    $('.brd').prop('disabled', false);
	    $(this).prop('disabled', true);
	});
	$('.order-item').click(function(){
		$('.order-category').empty();
		$('.order-form').empty();
		item_name = $(this).val();
		order_number = $('#order_number').val();
		data = "item_name="+item_name+"&order_number="+order_number;
		url='sell_category';
		$.ajax({
			url:url,
			data:data,
			dataType:"html",
			type:'post',
			success:function(response){
				order_number++;
				$('.order-category').append(response);
			},
			error:function(response){}
		});
	});
});

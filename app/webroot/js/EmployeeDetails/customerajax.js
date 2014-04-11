<script type="text/javascript">
$(document).ready(function() {
 
 	$('.next').click(function(e){
		e.preventDefault();
 		url='customer_item';
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
</script>
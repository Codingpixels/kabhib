<script>
  $().ready(function() {
      $("#EdeliveryForm").validate({
      });
  });
</script>
<?php
$item_array=array('Bread'=>'Bread','Cake'=>'Cake','Khari'=>'Khari','Pastry'=>'Pastry','Chocolate'=>'Chocolate',
						'Pudding'=>'Pudding','Extra'=>'Extra','NewArrival'=>'New Arrival','Khakhra'=>'Khakhra',
						'CupCake'=>'CupCake','DryCake'=>'DryCake','Cookie'=>'Cookie','Puff'=>'Puff','Savories'=>'Savories',
						'CreamRoll'=>'CreamRoll');

?>
<div class="main_content">
	<div class="inner_content sel">
				<fieldset class='stockorder'>
					<div class='subinner'>
						<div class="menubtn">
						<?php
							foreach ($item_array as $key => $value) { ?>
								<button name="<?php echo $key; ?>" value="<?php echo $key; ?>" class="order-item orderitem btn-primary brd" id="brd"> <?php echo $value;  ?> </button>
							<?php	
							}
						?>
						</div>
						<div class="order-form">
							<label style="margin-left: 14px;">ITEMS:</label>
						</div>
						<input type="hidden" value="1" id="order_number">
						<div class="invoice">
							<p style="margin-left: 18px; margin-top: 5px;">Order Items:</p>
								<?php
									echo $this->Form->create('Customer',array('url' => array('controller' => 'EmployeeOrders',
							   																	'action' => 'order', 'id' => 'main')));
								?>
							<div class="indata">
								<table class="table table-hover">
									<tr class='info'>
										<th style='width: 187px;'><label>Particulars</label></th>
										<th><label>Quantity</label></td>
										<th><labele><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></label></th>
									</tr>
								</table>	
							</div>
							<input type="submit" value="ORDER" class='btn-success submitbtn btn2' 
							style='margin-left: 304px; margin-top: -10px;'> 
				    		<?php echo $this->Form->end();?>
						</div>
				    </div>	
				</fieldset>
		</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script> 
<script type="text/javascript">
$(".brd").click(function (event) { 
	        event.preventDefault();
	        $('.brd').prop('disabled', false);
	        $(this).prop('disabled', true);
	    });
$('.order-item').click(function(){
		$('.order-form').empty();
 		item_name = $(this).val();
 		order_number = $('#order_number').val();
 		data = "item_name="+item_name+"&order_number="+order_number;
 		url='orderajax';
 		$.ajax({
 			url:url,
 			data:data,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 				order_number++;
 				$('#order_number').val(order_number);
 				$('.order-form').append(response);
 			},
 			error:function(response){}
 		});
$('#submit').click(function(){
	$('form#main').submit();
});

 });
$.validate();
</script>
<style type="text/css">
.indata{
	height: 378px;
	margin-top: 0px;
	height: 378px;
	margin-bottom: 17px;
}
</style>
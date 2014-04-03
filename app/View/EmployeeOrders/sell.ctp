<?php
	$item_array=array('Bread'=>'Bread','Cake'=>'Cake','Khari'=>'Khari','Pastry'=>'Pastry','Chocolate'=>'Chocolate',
						'Pudding'=>'Pudding','Khakhra'=>'Khakhra','CupCake'=>'CupCake','DryCake'=>'DryCake','Cookie'=>'Cookie','Puff'=>'Puff','Savories'=>'Savories','CreamRoll'=>'CreamRoll','NewArrival'=>'New Arrival','Extra'=>'Extra');

?>
<div class="main_content">
	<div class="inner_content sel">
		<fieldset class='stockorder'>
			<div class='subinner sell'>     
				<div class="menubtn">
					<?php
						foreach ($item_array as $key => $value) { ?>
							<button name="<?php echo $key; ?>" value="<?php echo $key; ?>" class="order-item orderitem btn-primary brd" id="brd"> <?php echo $value;  ?> </button>
						<?php	
						}
					?>
				</div>
				<div class="order-category" >
				</div>
				<div class="order-form" style="margin-top:44px;">
				</div>
				<input type="hidden" value="1" id="order_number">
				<div class="invoice">
					<p>Invoice:</p>
						<?php 
						echo $this->Form->create('Customer',array('url' => array('controller' => 'EmployeeOrders',
					   																	'action' => 'takeaway', 'id' => 'main'))); 
					   	echo $this->Form->input('name',array('label' => 'Customer Name:','class' =>'form-control inp required'));
						echo $this->Form->input('number',array('label' => 'Mobile Number:','class' =>'form-control inp required'));
						?>
						
						<div class="indata">
							<table class="table table-hover">
								<tr class="info">
									<th><label>Particulars</label></th>
									<th><label>Quantity</label></th>
									<th><label>Amount</label></th>
									<th><label>Delete</label></th>
								</tr>
							</table>	
						</div> 
						<input value="Bill" type='submit' class='btn-success btn submitbtn btn2' 
						>
						<?php
						echo $this->Form->end();
						?>
				</div>
				<div class="total_amt">
						<table>
							<tr>
								<td><b>Amount:</b></td>
								<td id="amt"></td>
							</tr>
							<tr>
								<td><b>VAT:</b></td>
								<td>15%</td>
							</tr>
							<tr>
								<td><b>Total:</b></td>
								<td id="totamt"></td>
							</tr>
						</table>
				</div>
			</div>
		</fieldset>
	</div>
</div>

<script type="text/javascript">
$().ready(function() {
	$('.submitbtn').click(function(){
	    $('#CustomerSellForm').submit();
	});
    $("#CustomerSellForm").validate();
  });
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
</script>
<style type="text/css">
.indata{
	height: 301px;
}
.error-message{
	margin-top: -33px !important; 
	margin-left: 178px !important;
}
</style>

<div class="main_content">
	<div class="inner_content sel">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class="menubtn">
					<button name="bread" value="Bread" class="order-item orderitem btn-primary brd" id="brd">Bread </button>
					<button name="cake" value="Cake" class="order-item orderitem btn-primary brd" id="brd">Cake </button>
					<button id="brd" class="order-item orderitem btn-primary brd" value="Khari" name="khari">Khari </button>
					<button id="brd" class="order-item orderitem btn-primary brd" value="Pastry" name="pastry">Pastry </button>
					<button name="extra" value="Extra" class="order-item orderitem btn-primary brd" id="brd">Chocolates</button>
					<button name="extra" value="Extra" class="order-item orderitem btn-primary brd" id="brd">Puddings</button>
					<button name="extra" value="Extra" class="order-item orderitem btn-primary brd" id="brd">Extra</button>
					<button id="brd" class="order-item orderitem btn-primary brd" value="NewArrival" name="NewArrivals">
						New Arrival 
					</button>

				</div>

				<div class="order-form" style="margin-top:44px;">
					<p style="margin-left: 18px;"><label>ITEMS:</label></p>
				</div>
				<input type="hidden" value="1" id="order_number">

				<div class="invoice">
					<p style="margin-left: 7px; margin-bottom: -5px;">Invoice:</p>

						<?php echo $this->Form->create('Customer',array('url' => array('controller' => 'EmployeeOrders',
					   																	'action' => 'advance', 'id' => 'main')));	
						echo $this->Form->input('name',array('label' => 'Name:','class' =>'required form-control inp'
													));
						echo $this->Form->input('number',array('label' => 'Contact:','class' =>'required form-control inp'
													));
						?>
						<label style='margin-left: 8px;'>Delivery Date:</label>
						<?php
						echo "<fieldset style='margin-left: 158px; margin-top: -42px; margin-bottom: 11px;'>";
					   	echo $this->Form->input('date',array('label' => false,'class' => 'form-control1 required','type'=>'date'));
					   	echo "</fieldset>";
						echo $this->Form->input('advance',array('label' => 'Advance Payment:','class' =>'required form-control inp'
												));
						echo $this->Form->input('disc',array('label'=>'Disc. Cup:','class'=>'form-control inp'));
						?>
						
						<div class="indata">
							<table class="table table-hover">
								<tr class="info">
									<!-- <th style="width: 55px;"><label>Item</label></th> -->
									<th><label>Particulars</label></th>
									<th><label>Quantity</label></th>
									<th><label>Amt</label></th>
									<th><labele><?php echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp"; ?></label></th>
								</tr>
							</table>	
						</div>
						<input value="BILL" type='submit' class='btn-success btn submitbtn btn2' 
						style='margin-left: 308px; margin-top: 2px; width: 82px; height: 50px;'>
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
      $("#CustomerAdvanceForm").validate({
      });
  });
$('.reset').click(function(){
	$('.clr').empty();
})
$('.order-item').click(function(){
		$('.order-form').empty();
 		item_name = $(this).val();
 		order_number = $('#order_number').val();
 		data = "item_name="+item_name+"&order_number="+order_number;
 		url='sellajax';
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
});
$(".brd").click(function (event) { 
	        event.preventDefault();
	        $('.brd').prop('disabled', false);
	        $(this).prop('disabled', true);
	    });
</script>
<style type="text/css">
.error-message{
	margin-left: 178px !important; 
	margin-top: -32px !important;
}
</style>
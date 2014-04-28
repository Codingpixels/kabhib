<script>
  $(document).ready(function() {
      $("#EmployeeOrderSpecialForm").validate({
 
  });
</script>
<?php
	$flavours=array('select'=>'select','Vanilla'=>'Vanilla','Orange'=>'Orange','Chocolate'=>'Chocolate','Others'=>'Others');
?>
<div class="main_content">
	<div class="inner_content sel">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class='invoice2' style="width: 661px; height:530px;">
					<?php echo $this->Form->create(); ?>
						<div class="special-form">
							<label>Enter Customer Name:</label>
							<?php echo $this->Form->input('name',array('label' => false,'class' => 'required','id'=>'name', 'name'=>'name')); ?>

						</div>
						<div class="special-form">
							<label>Enter Mobile Number:</label>
							<?php echo $this->Form->input('num',array('label' => false,'class' => 'required val_phone','id'=>'number')); ?>

						</div>
						<div class="special-form">
							<label>Enter Weight(kg):</label>
							<?php echo $this->Form->input('weight',array('label' => false,'class' => 'required only_numbers','id'=>'weight')); ?>

						</div>
						<div class="special-form">
							<label>Select Flavours:</label>
							<?php echo $this->Form->input('flavours', array('type' => 'select', 'options' => $flavours,'label'=>false, 'class' => 'required','id'=>'flavour','data-validation'=>'required'));?>
							<?php echo $this->Form->input('flavours2',array('label' => false,'class' => 'required','id'=>'flavour2','data-validation' => 'required','style'=>'margin-top: -75px; margin-left: 395px; width: 137px;')); ?>

						</div>
						<div class="special-form">
							<label>Enter Delivery Date:</label>
							
							<?php echo $this->Form->input('date',array('id'=>'date',
					    								'label' =>false,'class'=>'required',
					    								'data-validation' => 'date required')); ?>
						</div>
						<div class="special-form">
							<label>Enter Time:</label>
							<?php echo $this->Form->input('time',array('label' => false,'class' => 'required','id'=>'time', 'data-validation' => 'required'  )); ?>

						</div>
						<div class="special-form">
							<label>Discount Coupon:</label>
							<?php echo $this->Form->input('coupon',array('label' => false,'class' => 'required','id'=>'coupon')); ?>

						</div>
						<div class="special-form">
							<label>Deposit:</label>
							<?php echo $this->Form->input('deposit',array('label' => false,'class' => 'required only_numbers','id'=>'deposit')); ?>

						</div>
						<div class="special-form">
							<label>Total Amount:</label>
							<?php echo $this->Form->input('tot',array('label' => false,'class' => 'required only_numbers',
											'id'=>'tot')); ?>

						</div>
						<div class="special-form">
							<label>Advance Payment:</label>
							<?php echo $this->Form->input('advance',array('label' => false,'class' => 'required only_numbers','id'=>'advance')); ?>

						</div>
						<div class="special-form">
							<label>Remarks:</label>
							<?php echo $this->Form->input('Remark',array('label' => false,'class' => 'required','id'=>'remark')); ?>

						</div>
						
						<input class="btn btn-success reset submitbtn btn2"  type= "submit" value="SUBMIT" style="margin-left: 532px; margin-top:-50px" id="submit">
						<?php echo $this->Form->end();  ?>
						
				</div>
				<div class="invoice1">
						<label style="margin-top: 8px; margin-left: -24px;"></label>
				</div>
				<div class="form_footer">
					<button  id="print" class="btn btn-success reset submitbtn btn2 " value="ok" style="margin-left: 246px; margin-top: 54px;">PRINT</button>
				</div>
			</div>
		</fieldset>
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){

	$('#flavour2').hide();
	$('#flavour').change(function(){
   			 var selected_item = $(this).val()

    		if(selected_item == "Others"){
        		$('#flavour2').show();
    		}else{
        		$('#flavour2').hide();
    		}
	});
	$('#print').click(function(){
	   	var bill = $('.invoice1').html();
 		$.ajax({
 			url:'bill_print_special',
 			data:'data='+bill,
 			dataType:"html",
 			type:'post',
 			success:function(response){
 	 			// alert(response);
 	 		},
 			error:function(response){}
		});

	});
	$("#deposit").blur(function(){
		var dep=$(this).val();
		var wgt=$('#weight').val();
		var amt= parseInt(dep)+parseInt(wgt)*200;
		var advance= parseInt(amt)*(20/100);
		$('#tot').val(amt);
		$('#advance').val(advance);    
	});

	$("#date").datepicker({dateFormat:'dd-mm-yy', minDate: 0});
 });
</script>
<style type="text/css">
	.inp
	{
		margin-left: 173px;
	}

 .error-message{
	margin-top: -30px !important ; 
	margin-left: 391px !important ; 
	height: 17px; 
	width: 217px;
	}

	.invoice1
	{
		margin-left: 747px !important;
    	margin-top: -529px !important;
	}

	
</style>
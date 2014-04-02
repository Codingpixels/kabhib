<div class="main_content">
	<div class="inner_content sel">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<label>Add new arrival </label>
				<div class='invoice2' style="width: 718px;">

					<?php echo $this->Form->create(); ?>
						<div class="special-form">
							<label>Enter Name:</label>
							<?php echo $this->Form->input('name',array('label' => false,'class' => 'form-control inp','id'=>'item_name','data-validation' => 'required','name'=> 'item_name')); ?>

						</div>
						<div class="special-form">
							<label>Enter Quantity:</label>
							<?php echo $this->Form->input('number',array('label' => false,'class' => 'form-control inp',
							'id'=>'quantity','data-validation' => 'number','name'=> 'quantity')); ?>

						</div>
						<div class="special-form">
							<label>Enter Price(Rs.):</label>
							<?php echo $this->Form->input('weight',array('label' => false,'class' => 'form-control inp','id'=>'price','data-validation' => 'number', 'name'=> 'price')); ?>

						</div>
						<div class="special-form">
							<label>Enter Type:</label>
							<?php echo $this->Form->input('type',array('label' => false,'class' => 'form-control inp','id'=>'type','data-validation' => 'required', 'name'=> 'type')); ?>

						</div>
						<div class="special-form">
							<label>Enter Item Code:</label>
								<?php echo $this->Form->input('item_code',array('label' => false,'class' => 'form-control inp','id'=>'item_code','data-validation' => 'required', 'name'=> 'item_code')); ?>

						</div>
						<div class="special-form">
							<label>Enter Self Life:</label>
								<?php echo $this->Form->input('shelf_life',array('label' => false,'class' => 'form-control inp','id'=>'shelf_life','data-validation' => 'required', 'name'=> 'shelf_life')); ?>

						</div>
						<div class="special-form">
							<label>Enter Unit:</label>
								<?php echo $this->Form->input('unit',array('label' => false,'class' => 'form-control inp','id'=>'unit','data-validation' => 'required', 'name'=> 'unit')); ?>

						</div>							
						<input class="btn btn-success reset submitbtn btn2" id="submit" value="Submit" style="margin-left: 317px;" type="submit">
					<?php echo $this->Form->end();  ?>
				</div>
			</div>
		</fieldset>
	</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
<script type="text/javascript">
	$.validate();
</script>
<style type="text/css">
	.inp
	{
		margin-left: 173px;
	}
</style>
<style type="text/css">
 .form-error{
	margin-top: -24px ;
	margin-left: 398px;
	width: 265px ;
}
</style>
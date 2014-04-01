<?php echo $this->Form->create('Item',array('url' => array('controller' => 'Admins',
					   																	'action' => 'existing'))); ?>
	<div class="special-form">
		<label>Enter Item Code:</label>
		<?php echo $this->Form->input('name',array('label' => false,'class' => 'form-control inp','id'=>'item_name','data-validation' => 'required','name'=> 'item_code')); ?>

	</div>
	<div class="special-form">
		<label>Enter Item Name:</label>
		<?php echo $this->Form->input('name',array('label' => false,'class' => 'form-control inp','id'=>'item_name','data-validation' => 'required','name'=> 'item_name')); ?>

	</div>
	<div class="special-form">
		<label>Select Category:</label>
			<?php echo $this->Form->input('item_category',array('options'=>$category_array,'label' => false,'class' => 'form-control inp','id'=>'item_code','data-validation' => 'required', 'name'=> 'item_category')); ?>

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
		<label>Enter Self Life:</label>
			<?php echo $this->Form->input('shelf_life',array('label' => false,'class' => 'form-control inp','id'=>'shelf_life','data-validation' => 'required', 'name'=> 'shelf_life')); ?>

	</div>
	<div class="special-form">
		<label>Enter Unit:</label>
			<?php echo $this->Form->input('unit',array('label' => false,'class' => 'form-control inp','id'=>'unit','data-validation' => 'required', 'name'=> 'unit')); ?>

	</div>	
	<input type="text" value="<?php echo $item_name; ?>"  id="item_name" name="item_type" style="display:none;"/>
 	<input class="btn btn-success reset submitbtn btn2" id="submit" value="Submit" style="margin-left: 317px;" 
						type="submit">
<?php echo $this->Form->end();  ?>
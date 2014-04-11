<div class=order_<?php echo $order_number; ?>>
	<div class="b1">
		<label>Select Item:</label>
	    <?php echo $this->Form->input($order_number.'.name', array('type' => 'select', 'options' => $list,'label'=>false, 'class' => 'required'));?>
	</div>
	<div class="b2">
		<label>Select Size:</label>
	    <?php echo $this->Form->input($order_number.'.size', array('type' => 'select', 'options' => $size,'label'=>false));?>
	</div>
	<div class="b3">
		<label>Select Quantity:</label>
	    <?php echo $this->Form->input($order_number.'.qty', array('type' => 'select', 'options' => $qty,'label'=>false));?>
	</div>
	<div class="b4">
	    
	    <?php echo $this->Form->input('date',array('type'=>'date','id'=>'date',
	    								'label' => 'Date')); ?>

	</div>
	<?php echo $this->Form->input($order_number.'.type',array('type'=>'hidden', 'value'=>$item_name, 'class' => 'order_type')); ?>
	<?php //if($order_number>=0):  ?>
		<div class="b5"><a href="" class="next">Next</a></div>
	<?php //endif; ?>
</div>
<?php echo $this->Html->script('EmployeeDetails/customerajax.js') ?>
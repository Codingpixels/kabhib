<?php
	$list_array=array('select'=>'select','Bread'=>'Bread','Cake'=>'Cake');
?>
<p>
	<label>Select Items:</label>
    <?php echo $this->Form->input('item', array('type' => 'select', 'options' => $list_array,'label'=>false, 'class' => 'order orderitem'));?>
</p>

<?php echo $this->Html->script('EmployeeDetails/customer_item.js') ?>

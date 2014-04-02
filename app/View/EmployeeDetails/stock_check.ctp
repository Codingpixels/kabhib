<?php
$item_array=array('Bread'=>'Bread','Cake'=>'Cake','Khari'=>'Khari','Pastry'=>'Pastry','Chocolate'=>'Chocolate',
						'Pudding'=>'Pudding','Extra'=>'Extra','NewArrival'=>'New Arrival','Khakhra'=>'Khakhra',
						'CupCake'=>'CupCake','DryCake'=>'DryCake','Cookie'=>'Cookie','Puff'=>'Puff','Savories'=>'Savories',
						'CreamRoll'=>'CreamRoll');

?>
<div class="main_content">
	<div class='inner_content'>
		<fieldset class='stockorder'>
			<div class='subinner'>
				<form>
					<?php foreach ($item_array as $key => $value) { ?>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeDetails', 'action' => 
									'update_stock',$key)); ?>" class="current"><?php echo $key; ?></button>
					<?php } ?>
				</form>

			</div>
		</fieldset>
	</div>
</div>
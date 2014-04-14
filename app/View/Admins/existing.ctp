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
				</div>
			</div>
		</fieldset>
	</div>
</div>
<?php echo $this->Html->script('Admins/existing'); ?>
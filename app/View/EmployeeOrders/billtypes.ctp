<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>

				<div class="hmediv">
					<form>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeOrders', 'action' => 'sell')); ?>" class="current">Take Away</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeOrders', 'action' => 'special')); ?>" class="current">Special Order</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeOrders', 'action' => 'advance')); ?>" class="current">Advance Booking</button>
					</form>
				</div>	

			</div>
		</fieldset>


	</div>
</div>
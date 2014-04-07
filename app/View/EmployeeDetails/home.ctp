
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner sell'>
				<div class="hmediv">
					<?php
						if($this->Session->check('eid')):
					?>
					<form>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeOrders', 'action' => 'billtypes')); ?>" class="current">Billing</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeOrders', 'action' => 'order')); ?>" class="current">Order Stock</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'Deliveries', 'action' => 'order_select')); ?>" class="current">Delivery</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'ReturnItems', 'action' => 'customer_return')); ?>" class="current">Customer Return</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'ReturnItems', 'action' => 'select_return')); ?>" class="current">Fresh Return</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeDetails', 'action' => 'stock_check')); ?>" class="current">Stock Check</button>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeDetails', 'action' => 'logout')); ?>" class="current">Logout</button>
					</form>
					<?php
    					endif;
					?>
				</div>	
			</div>
		</fieldset>
	</div>
</div>
<style type="text/css">
.success, .message, .cake-error, p.error, .error-message {
    background: repeat-x scroll 0 0 #AF6234;
    border: 1px solid rgba(0, 0, 0, 0.5);
    clear: both;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
</style>
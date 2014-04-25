<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<form>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_report_type')); ?>" class="current">Sales Report
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports',
							'action' => 'fresh_return_type')); ?>" class="current">Fresh Return Report</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'supply_demand','month')); ?>" class="current">Supply Demand Report
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports',
							'action' => 'difference_report')); ?>" class="current">Difference Report
					</button>
				</form>
			</div>
		</fieldset>
	</div>
</div>
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<form>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_overall_piechart')); ?>" class="current">Overall Report
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports',
							'action' => 'sales_category_wise_piechart')); ?>" class="current">Category Wise Report
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_item_wise_piechart')); ?>" class="current">Item Wise
							 Report
					</button>
				</form>
			</div>
		</fieldset>
	</div>
</div>
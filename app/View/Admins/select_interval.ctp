<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<?php echo $this->Session->flash(); ?>
				<div class="hmediv">
					<form>
						<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
								'action' => 'fresh_return','current')); ?>" class="current">Today's Report
						</button>
						<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins',
								'action' => 'fresh_return','week')); ?>" class="current">Weekly Report</button>
						<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
								'action' => 'fresh_return','month')); ?>" class="current">Monthly Report
						</button>
						<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
								'action' => 'fresh_return_report','year')); ?>" class="current">Yearly Report
						</button>						
					</form>
				</div>	
			</div>
		</fieldset>
	</div>
</div>
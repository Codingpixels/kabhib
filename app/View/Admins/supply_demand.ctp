<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class="hmediv">
					<?php
						if($this->Session->check('eid')):
					?>
					<form>
							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','jan')); ?>" class="current">JANUARY
							</button>
							
							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','feb')); ?>" class="current">FEBRUARY
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','mar')); ?>" class="current">MARCH
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','apr')); ?>" class="current">APRIL
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','may')); ?>" class="current">MAY
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','jun')); ?>" class="current">JUN
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','july')); ?>" class="current">JULY
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','aug')); ?>" class="current">August
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','sep')); ?>" class="current">SEPTEMBER
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','oct')); ?>" class="current">OCTOBER
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','nov')); ?>" class="current">NOVEMBER
							</button>

							<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 
							'action' => 'sd_report','dec')); ?>" class="current">DECEMBER
							</button>
					</form>
					<?php
    					endif;
					?>
				</div>	
			</div>
		</fieldset>
	</div>
</div>
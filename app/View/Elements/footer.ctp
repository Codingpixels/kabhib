<?php
	if($this->Session->read('eid') == 'admin'){
		if($this->params['action']!='admin')	{
?>
			<form>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 'action' => 
										'admin')); ?>" class="footer">HOME</button>
			</form>
<?php
		}
	} else {
		if($this->Session->check('eid') && $this->params['action']!='home'):	
?>
			<form>
				<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeDetails', 'action' => 
									'Home')); ?>" class="footer">HOME</button>
		    </form>
<?php
		endif;
	}
?>
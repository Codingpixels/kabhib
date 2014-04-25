<?php
	if($this->Session->read('Employee.position') == '1'){
		if($this->params['action']!='admin')	{
		?>
		<form>
			<button formaction="<?php echo $this->Html->url(array('controller' => 'Admins', 'action' => 
									'admin')); ?>" class="footer">HOME</button>
		</form>
<?php }
	} else {
?>
		<form>
			<button formaction="<?php echo $this->Html->url(array('controller' => 'EmployeeDetails', 'action' => 
								'Home')); ?>" class="footer">HOME</button>
	    </form>
<?php } ?>
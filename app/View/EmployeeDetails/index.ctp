<script>
  $().ready(function() {
      $("#EmployeeDetailIndexForm").validate({
      });
  });
</script>
<body>
	<div id='content'>
		<div class="subcontent">
				<?php
					echo "<br><br>";
					echo $this->Form->create('EmployeeDetail',array(
			   						'url' => array('controller' => 'EmployeeDetails','action' => 'login'),
									'style'=>'margin-left: 43px; margin-top: 0px;'));
					echo $this->Form->input('employee_id',array('label' => 'Username 	:','type' => 'text',
											'class' => 'required index inp form-control'));
					echo $this->Form->input('password',array('label' => ' Password   :','class' => 'required index alg inp form-control'));
					echo $this->Form->input('',array('type'=>'submit','class'=>'submitbtn1 btn1','label'=>false));
					echo $this->Form->end();
			
				?>
				<div id="link" style="margin-left: 51px; margin-top: -12px;">
			<?php 
				echo $this->Html->link('Click here to add new user!', array('controller'=>'EmployeePersonals', 'action'=>'signup'));
 			?>
 		</div>
		</div>
		
	</div>
</body>
<style type="text/css">
.success, .message, .cake-error, p.error{
    background: repeat-x scroll 0 0 #AF6234;
    border: 1px solid rgba(0, 0, 0, 0.5);
    clear: both;
    color: #FFFFFF;
    text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.3);
}
.error-message{
	margin-left: 158px !important;
	margin-top: -61px !important;
}
.form-control{
	margin-top: -29px; 
	margin-left: 102px; 
	margin-bottom: 8px;
}
</style>
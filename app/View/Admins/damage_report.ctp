<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<?php
					$month = array('January'=>'January','February'=>'February','March'=>'March','April'=>'April','May'=>'May',
						'June'=>'June','July'=>'July','August'=>'August','September'=>'September','October'=>'October',
						'November'=>'November','December'=>'December');
					$branch = array('Ahemdabad'=>'Ahemdabad','Baroda'=>'Baroda','Surat'=>'Surat','Jamnagar'=>'Jamnagar',
									'Bharuch'=>'Bharuch','Morbi'=>'Morbi');
					$report_type = array ('Customer Return' => 'Customer Return', 'Fresh Return' => 'Fresh Return');

					echo $this->Form->create('EmployeeDetail');
					echo $this->Form->input('branch',array('label'=>'Select Branch:','type'=>'select','options'=>$branch));
					echo $this->Form->input('month',array('label'=>'Select Month:','type'=>'select','options'=>$month));
					echo $this->Form->input('report_type',array('label'=>'Select type of report:','type'=>'select','options'=>$report_type));
					echo "<input type='submit' value='SHOW' class='btn-success btn submitbtn btn2' style='margin-left: 8px; margin-top: 5px;'>";
					echo $this->Form->end();
				?>
			</div>
		</fieldset>
	</div>
</div>
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class="report-head">
					<label>
						<h1><b>FINAL DATE WISE <?php echo $month."-".$year; ?> FRESH RETURN DAMAGE REPORT OF <?php echo $branch; ?>:-</b></h1>
					</label>
				</div>
				<div class="damage">
					<table class='table table-hover '>
						<tr class="info"><th>NO.</th><th>DATE</th><th>DAMAGE</th></tr>
						<?php
							$tot_damage = 0;
							$i = 1;
							foreach ($datewise_return_array		 as $key => $value) {
								echo "<tr><td>".$i."</td><td>".$key."</td><td>".$value."</td></tr>";
								$i++;
								$tot_damage = $tot_damage + $value;
							}
						?>
					</table>
				</div>
				<div class="report-foot">
					<label style='width: 261px;'>TOTAL  DAMAGE OF <?php echo $month." ".$year ?></label> 
					<label style="margin-right: 17px;">=</label> 
					<?php echo $tot_damage; ?>
					<br>
					<label style='width: 261px;'>TOTAL SALE OF <?php echo $month." ".$year ?></label> 
					<label style='margin-right: 17px;'>=</label> 
					<?php echo $total_purchase_quantity; ?>
					<br>
					<label style='width: 261px;'>TOTAL DAMAGE % <?php echo $month." ".$year ?></label> 
					<label style='margin-right: 17px;'>=</label> 
					<?php
						echo ($total_return_quantity/$total_purchase_quantity)* 100;
					?>
					%
				</div>
				<div style="margin-top: -27px; margin-left: 1076px;">
					<?php 
						echo $this->Form->create('fresh_return_chart', array('url'=> array('controller' =>'Admins','action'=>'fresh_return_chart')));
						foreach($actual_purchase_array as $key => $value){
						  echo '<input type="hidden" name="result_purchase['.$key.']" value="'. $value. '">';
						}
						foreach($actual_return_array as $key => $value){
						  echo '<input type="hidden" name="result_damage['.$key.']" value="'. $value. '">';
						}
						// echo $this->Form->hidden($actual_purchase_array, array('value' => $actual_purchase_array));
						// echo $this->Form->hidden($actual_damage_array, array('value' => $actual_damage_array));
					?>
						<input type="submit" value="View">
					<?php
						echo $this->form->end();
					?>
					<form action=>
						<!-- <a href="<?php echo $this->Html->url(array('controller' => 'Admins','action' => 'fresh_return_chart','Total Sell',
						$total,'Total Damage',$tot_damage,'Damage Chart')); ?>">
							View Charts > > >
						</a> -->
					</form>
				</div>
			</div>
		</fieldset>
	</div>
</div>

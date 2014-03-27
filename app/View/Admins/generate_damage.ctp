<?php

?>
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<div class="report-head">
					<label>
						<h1><b>FINAL DATE WISE <?php echo $month."-".$year; ?> DAMAGE REPORT OF <?php echo $branch; ?>:-</b></h1>
					</label>
				</div>
				<div class="damage">
					<table class='table table-hover '>
						<tr class="info"><th>NO.</th><th>DATE</th><th>DAMAGE</th></tr>
						<?php
							$tot_damage = 0;
							$i = 1;
							foreach ($damage as $key => $value) {
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
					<?php echo $total; ?>
					<br>
					<label style='width: 261px;'>TOTAL DAMAGE % <?php echo $month." ".$year ?></label> 
					<label style='margin-right: 17px;'>=</label> 
					<?php
						if($total == 0){
							echo '0.0';
						} else {
							echo $tot_damage * 100/$total;
						}
					?>
					%
				</div>
				<div style="margin-top: -27px; margin-left: 1076px;">
					<form>
						<a href="<?php echo $this->Html->url(array('controller' => 'Admins','action' => 'view_chart','Total Sell',
						$total,'Total Damage',$tot_damage,'Damage Chart')); ?>">
							View Charts > > >
						</a>
					</form>
				</div>
			</div>
		</fieldset>
	</div>
</div>

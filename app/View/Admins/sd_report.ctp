<div class="main_content">
	<div class='inner_content'>
		<fieldsetclass='stockorder'>
			<div class='subinner' style='margin-left: 58px;'>
				<div class="panel-group" id="accordion">
					   <div class="panel panel-default">
					   		<?php
					   			$string_dem = '';
					   			$string_sup = '';
					   			foreach($demand as $key => $value){
					   				$dem_total = 0;
					   				$sup_total = 0;
						   	?>
								    <div class="panel-heading">
								       	<h4 class="panel-title">
								         	<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $key; ?>">
								         	<label> 
								         		<?php
								         			echo $key;
								         		?>
								         	</label>
								        	</a>
								       	</h4>
								    </div>
								    <div id='<?php echo $key; ?>' class="panel-collapse collapse in">
								       	<div class="panel-body">
								       		<table class="table table-hover">
								       			<tr class="info"><th>INDEX</th><th>NAME</th><th>DEMAND</th><th>SUPPLY</th></tr>
								       			<?php 
								       				foreach ($value as $key1 => $value1) {
								       					$index = 0;
									       				$index ++;								       				
									       		?>
								       					<tr>
								       						<td><?php echo $index; ?></td>
								       						<td><?php echo $key1;?></td>
								       						<td><?php echo $value1;?></td>
								       						<?php  
								       							$dem_total = $dem_total + $value1;
								       							if(isset($supply[$key][$key1])) {
								       						?>
							       							<td><?php echo $supply[$key][$key1]; ?></td>
								       						<?php
								       								$sup_total = $sup_total + $supply[$key][$key1];
								       							} else {
								       								$sup_total = $sup_total + 0;
								       						?>
								       						<td> 0 </td>
								       						<?php
								       							}
								       						?>
								       						
								       					</tr>
									       		<?php
									       			}
								       			?>
								       		</table>			        
								     	</div>
								   	</div>
							<?php
									$demand_tot[$key] = $dem_total;
					   				$supply_tot[$key] = $sup_total;
					   				$string_dem = $string_dem.$key.'/'.$dem_total.'/';
					   				$string_sup = $string_sup.$key.'/'.$sup_total.'/';
								}
							?>
						</div>
					</div>
					<a href="/kabhib/Admins/view_chart/<?php echo $string_dem.'Demand Chart'; ?>" 
						style="margin-left: 430px; margin-right: 20px;">
						View Demand Charts > > >
					</a>
					<a href="/kabhib/Admins/view_chart/<?php echo $string_sup.'Supply Chart'; ?>">
						View Supply Charts > > >
					</a>
				</div>
		</fieldset>
	</div>
</div>
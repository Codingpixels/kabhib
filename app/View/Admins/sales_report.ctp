<div class="main_content">
	<div class='inner_content'>
		<fieldsetclass='stockorder'>
			<div class='subinner' style='margin-left: 58px;'>
				<?php
					if($info == 'empty'){
						echo 'HHH';exit;
					}
					$i=0;
					$item_name = array();
					$item_type = array();
					$j = 0;
					foreach ($info as $key => $value) {
						if(!in_array($value['item_name'],$item_name)){
							$item_name[$j] = $value['item_name'];
							$item_type[$j] = $value['type'];
							$j ++;
						}
						$i++;
					}
					$total_sell = array();
					$type = array();
					$i = 0;
					$m = 0;
					foreach ($item_type as $key) {
						if(!in_array($key,$type)){
							$type[$m] = $key;
							$total_sell[$key] = 0;
							$m ++;
						}
						$i++;
					}
					$item_quantity = array();
					for($i=0;$i < $j; $i++){
						$total = 0;
						foreach ($info as $key => $value){
							if($value['item_name'] == $item_name[$i]){
								$total = $total + $value['item_quantity'];
							}
						}
						$item_quantity[$i] = $total;
					}
				?>
					<div class="panel-group" id="accordion">
					   <div class="panel panel-default">
					   		<?php
					   			$col = 0;
					   			foreach($type as $type){
					   				$item_string = '';
						   	?>
								    <div class="panel-heading">
								       	<h4 class="panel-title">
								         	<a data-toggle="collapse" data-parent="#accordion" href="#<?php echo $type; ?>">
								         	<label> 
								         		<?php
								         			echo $type;
								         		?>
								         	</label>
								        	</a>
								       	</h4>
								    </div>
								    <div id='<?php echo $type; ?>' class="panel-collapse collapse in">
								       	<div class="panel-body">
								       		<table class="table table-hover">
								       			<tr class="info"><th>INDEX</th><th>NAME</th><th>QUANTITY SOLD</th></tr>
								       			<?php 
								       				$index = 0;
								       				for($i=0;$i<$j;$i++){
									       				if($item_type[$i] == $type){
									       					$index ++;
									       		?>
									       					<tr>
									       						<td><?php echo $index; ?></td>
									       						<td><?php echo $item_name[$i];?></td>
									       						<td><?php echo $item_quantity[$i];?></td>
									       					</tr>
									       		<?php
									       					$total_sell[$type] = $total_sell[$type]+$item_quantity[$i]; 
									       					$item_string = $item_string.$item_name[$i].'/'.$item_quantity[$i].'/';
									       				}
								       				}
								       				$item_string = $item_string.$type."'s".' Chart';
								       			?>
								       		</table>
								       		<a href="/kabhib/Admins/item_chart/<?php echo $item_string; ?>" 
								       		style="margin-left: 532px">
								       			View <?php echo $type."'s"; ?>  Chart > > >
								       		</a> 			        
								     	</div>
								   	</div>
							<?php
								}
							?>
						</div>
					</div>
					<?php
						$string = '';
						foreach ($total_sell as $key => $value) {
							$string = $string.$key.'/'.$value.'/';						
						}
						 $string = $string.$title;
					 ?>

					<a href="/kabhib/Admins/view_chart/<?php echo $string; ?>" style="margin-left: 550px">
						View Sales Charts > > >
					</a>
			</div>
		</fieldset>
	</div>
</div>
<?php
$category_array=array('Bread'=>'Bread','Cake'=>'Cake','Khari'=>'Khari','Pastry'=>'Pastry','Chocolate'=>'Chocolate',
						'Pudding'=>'Pudding','Extra'=>'Extra','NewArrival'=>'New Arrival','Khakhra'=>'Khakhra',
						'CupCake'=>'CupCake','DryCake'=>'DryCake','Cookie'=>'Cookie','Puff'=>'Puff','Savories'=>'Savories',
						'CreamRoll'=>'CreamRoll');

?>
<?php echo $this->Html->script('googlechart.js'); ?>
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable(<?php echo $chart_data_json;?>);

		var options = {
		  title: "<?php echo 'Sales '.$period.' Report'; ?>"
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class="subinner">
				<div>
				<?php 
					echo $this->Form->create('sales_category_wise_piechart');
					echo $this->Form->input('item_category',array('options'=>$category_array,'label' => 'Select category','id'=>'item_code','item_category')); 
					$span = array('today' => 'today', 'weekly' => 'weekly', 'monthly' => 'monthly', 'yearly' => 'yearly');
					echo $this->Form->input('report_span',array('options'=>$span,'label' => 'Select span','id'=>'report_span','item_category')); 
				?>
					<input readonly id="btn-cat" value="Search" class='submitbtn btn4 btn-success btn2' type="submit"> 

					<?php echo $this->Form->end();?>
				</div>
				<div id="piechart" style="width: 1300px; height: 500px; top: 0px;"></div>
			</div>
		</fieldset>
	</div>
</div>

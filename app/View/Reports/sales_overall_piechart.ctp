<?php echo $this->Html->script('googlechart.js'); ?>
<?php if(!empty($this->request->params['pass'][0])) { ?>
<script type="text/javascript">
	google.load("visualization", "1", {packages:["corechart"]});
	google.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable(<?php echo $chart_data_json;?>);

		var options = {
		  title: "<?php echo 'Overall Sales '.$period.' Report'; ?>"
		};

		var chart = new google.visualization.PieChart(document.getElementById('piechart'));
		chart.draw(data, options);
	}
</script>
<?php } ?>
<div class="main_content">
	<div class="inner_content">
		<fieldset class='stockorder'>
			<div class='subinner'>
				<form>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_overall_piechart','today')); ?>" class="current">Today
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports',
							'action' => 'sales_overall_piechart','weekly')); ?>" class="current">Weekly
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_overall_piechart','monthly')); ?>" class="current">Monthly
					</button>
					<button formaction="<?php echo $this->Html->url(array('controller' => 'Reports', 
							'action' => 'sales_overall_piechart','yearly')); ?>" class="current">Yearly
					</button>
				</form>
				<div id="piechart" style="width: 1300px; height: 500px; top: 147px;"></div>
			</div>
		</fieldset>
	</div>
</div>
<?php echo $this->Html->script('googlechart.js'); ?>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable(<?php echo $chart_data_json?>);

    var options = {
      title: 'Fresh Return Report',
      hAxis: {title: 'Items', titleTextStyle: {color: 'red'},
      }
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }

</script>
<div class="main_content">
    <div class="inner_content">
        <fieldset class='stockorder'>
          <div class='subinner'>
              <div id="chart_div"></div>
              <a href="#" onclick="window.history.back();" style="margin-left: 550px"> < < <  Go Back </a>
          </div>
        </fieldset>
    </div>
</div>

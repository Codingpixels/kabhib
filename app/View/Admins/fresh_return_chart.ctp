<?php echo $this->Html->script('googlechart.js'); ?>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['month', 'purchase', 'damage'],
      <?php
        foreach ($item as $key => $value) {
      ?>
           ['<?php echo $key; ?>',   <?php echo $value; ?>],
      <?php
        }
      ?>
    ]);

    var options = {
      title: "<?php echo $title; ?>",
      
    };

    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
<div class="main_content">
    <div class="inner_content">
        <fieldset class='stockorder'>
          <div class='subinner'>
              <div id="piechart"></div>
              <a href="#" onclick="window.history.back();" style="margin-left: 550px"> < < <  Go Back </a>
          </div>
        </fieldset>
    </div>
</div>

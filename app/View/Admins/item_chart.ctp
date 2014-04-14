<?php echo $this->Html->script('googlechart.js'); ?>
<script type="text/javascript">
  google.load('visualization', '1', {packages:["corechart"]});
</script>
<script type="text/javascript">
  function drawVisualization() {
   var data = <?php echo $new_item_array; ?>;
    var wrapper = new google.visualization.ChartWrapper({
      chartType: 'BarChart',
      dataTable: data,
      options: {
        'vAxis': {title: "Items"},
        'hAxis': {title: "No of Quantities"},
      },
      containerId: 'visualization',
     
    });
    wrapper.draw();
  }
  google.setOnLoadCallback(drawVisualization);
</script>
<div class="main_content">
  <div class="inner_content">
      <fieldset class='stockorder'>
        <div class='subinner'>
    			<div id="visualization"></div>
    			<a href="#" onclick="window.history.back();" style="margin-left: 550px"> < < <  Go Back </a>
        </div>
      </fieldset>
  </div>
</div>

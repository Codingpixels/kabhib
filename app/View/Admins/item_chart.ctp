

    <script type="text/javascript" src="//www.google.com/jsapi"></script>
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
            'vAxis': {title: "No of quantities"},
            'hAxis': {title: "Items"},
          },
          containerId: 'visualization',
         
        });
        wrapper.draw();
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
      <div class="main_content">
        <div class="inner_content">
          <?php  





          ?>
            <fieldset class='stockorder'>
              <div class='subinner'>
    			<div id="visualization"></div>
    			<a href="#" onclick="window.history.back();" style="margin-left: 550px"> < < <  Go Back </a>
              </div>
            </fieldset>
        </div>
    </div>

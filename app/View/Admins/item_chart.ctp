<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>
      Google Visualization API Sample
    </title>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1');
    </script>
    <script type="text/javascript">
      function drawVisualization() {
        var wrapper = new google.visualization.ChartWrapper({
          chartType: 'ColumnChart',
          dataTable: [['' 
          				<?php 
      						foreach ($X as $key => $value) {
      						 echo ', "'.$value.'"';    						
      						}
          				?>
          			 ],
                     [ ''
	                    <?php 
      						foreach ($Y as $key => $value) {
      							echo ' ,'.$value;
      						}
          				?>
                     ]],
          options: {
            'title': "<?php echo $title; ?>",  
            'vAxis': {title: "No of quantities"},
            'hAxis': {title: "Items"},
          },
          containerId: 'visualization',
         
        });
        wrapper.draw();
      }
      google.setOnLoadCallback(drawVisualization);
    </script>
  </head>
  <body style="font-family: Arial;border: 0 none;">
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
  </body>
</html>
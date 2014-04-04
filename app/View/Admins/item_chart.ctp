
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
      //  var wrapper = new google.visualization.ChartWrapper({
      //   chartType: 'ColumnChart',
      //   dataTable: [['Germany', 'USA', 'Brazil', 'Canada', 'France', 'RU'],
      //               [700, 300, 400, 500, 600, 800]],
      //   options: {'title': 'Countries'},
      //   containerId: 'visualization'
      // });
       /*var wrapper = new google.visualization.ChartWrapper({
          chartType: 'ColumnChart',
          dataTable: [['test','DOUBLE DIP','STRAWBERRY','PINEAPPLE'] ,
                       [0,12,5,5] ],
          options: {},
          containerId: 'visualization',
      }); */
        var wrapper = new google.visualization.ChartWrapper({
          chartType: 'BarChart',
          dataTable: [ 
          				<?php echo $Y; ?>
          			 ,
                  <?php echo $X; ?>
                     ],
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
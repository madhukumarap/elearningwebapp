<?php  
 $connect = mysqli_connect("localhost", "root", "", "ayush");  
 $query = "SELECT pstatus, count(*) as number FROM treatmentinfo GROUP BY pstatus";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head> 
			<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
           <title>PIE CHART</title>  
		   

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	  <link rel="stylesheet" href="css/style.css">
		   
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['pstatus', 'number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["pstatus"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                       
                       
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart_dt'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
     <body>
                <h2>Decision Tree - Health Status </h2>  
                <br />  
				<center>
             <center>
                <div id="piechart_dt" style="width: 100%; height: 100%;"></div>  
				</center>
				</center>
		  
      </body>  
 </html>  
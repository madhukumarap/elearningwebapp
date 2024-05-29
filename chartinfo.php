

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>E-LEARNING</title>
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">E-LEARNING</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Edit Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      
       <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">ADMIN</p>

        </div>
      </div>
     <ul class="app-menu">
         <li><a class="app-menu__item " href="addtest.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add Test</span></a></li>
<li><a class="app-menu__item " href="addvideo.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Add Video</span></a></li>
             
	   <li class="treeview"><a class="app-menu__item active" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Search User Information</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="doctorinfo.php"><i class="icon fa fa-circle-o"></i>Doctor</a></li>
         
			<li><a class="treeview-item" href="userinfo.php"><i class="icon fa fa-circle-o"></i>User</a></li>
			<li><a class="treeview-item" href="entinfo.php"><i class="icon fa fa-circle-o"></i>Service Provider</a></li>
     </ul>
        <li class="treeview"><a class="app-menu__item" href="emmergencynoti.php" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Emergency Request</span><i class="treeview-indicator fa fa-angle-right"></i></a>
		 
          
        </li>
      </ul>
    </aside>
    <main class="app-content">
     <div id="DT1" style="display:none;" class="col-lg-6">
								<?php include 'piechart_dt.php' ?>	
		</div>
        
       
<?php

error_reporting(0);

	$time_start = microtime(true);
	
echo "<script>document.getElementById('DT1').style.display = 'block';</script>";
echo "<script>document.getElementById('DT2').style.display = 'block';</script>";
echo "<script>document.getElementById('KNN1').style.display = 'none';</script>";
echo "<script>document.getElementById('KNN2').style.display = 'none';</script>";
echo "<script>document.getElementById('N1').style.display = 'none';</script>";
echo "<script>document.getElementById('N2').style.display = 'none';</script>";
echo "<script>document.getElementById('viewnaivetime').style.display = 'none';</script>";
echo "<script>document.getElementById('viewknntime').style.display = 'none';</script>";
echo "<script>document.getElementById('viewdttime').style.display = 'none';</script>";

echo "<script>document.getElementById('All').style.display = 'none';</script>";
require_once('DecisionTree.php');

/*
 * Decision Tree Learning
 * Problem Solving: Predicting the output of instance (OR Function)
 */

$training_set = array(
	array(array(0, 'n', 'f'), 0),
	array(array(0, 'n', 't'), 1),
	array(array(0, 'y', 'f'), 1),
	array(array(0, 'y', 't'), 1),
	array(array(1, 'n', 'f'), 1),
	array(array(1, 'n', 't'), 1),
	array(array(1, 'y', 'f'), 1),
	array(array(1, 'y', 't'), 1),
);

$orTree = new DecisionTree();
$orTree->setAttrNum(3)->addTrainingSet($training_set)->startTraining();

$orTree->getTreeData();
//print_r($orTree->getTree());

//echo "\nInformation Gain per Attribute(column#, ordered by the ascending): \n";
//var_dump($orTree->getGain());

//echo "\nClassify: (0, n, f) is ", ($orTree->classify(array(0, 'n', 'f')));
$time_end = microtime(true);
 
//Subtract the two times to get seconds
 
$time = $time_end - $time_start;
$string1='Execution time :'.$time.' seconds';
echo "<script>document.getElementById('viewdttime').innerHTML= '$string1';</script>";





		?>
		   
	    
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="js/plugins/chart.js"></script>
    <script type="text/javascript">
      var data = {
      	labels: ["January", "February", "March", "April", "May"],
      	datasets: [
      		{
      			label: "My First dataset",
      			fillColor: "rgba(220,220,220,0.2)",
      			strokeColor: "rgba(220,220,220,1)",
      			pointColor: "rgba(220,220,220,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(220,220,220,1)",
      			data: [65, 59, 80, 81, 56]
      		},
      		{
      			label: "My Second dataset",
      			fillColor: "rgba(151,187,205,0.2)",
      			strokeColor: "rgba(151,187,205,1)",
      			pointColor: "rgba(151,187,205,1)",
      			pointStrokeColor: "#fff",
      			pointHighlightFill: "#fff",
      			pointHighlightStroke: "rgba(151,187,205,1)",
      			data: [28, 48, 40, 19, 86]
      		}
      	]
      };
      var pdata = [
      	{
      		value: 200,
      		color: "#46BFBD",
      		highlight: "#5AD3D1",
      		label: "Complete"
      	},
      	{
      		value: 100,
      		color:"#F7464A",
      		highlight: "#FF5A5E",
      		label: "In-Progress"
      	}
      ]
      
      var ctxl = $("#lineChartDemo").get(0).getContext("2d");
      var lineChart = new Chart(ctxl).Line(data);
      
      var ctxp = $("#pieChartDemo").get(0).getContext("2d");
      var pieChart = new Chart(ctxp).Pie(pdata);
    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>
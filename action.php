<?php
include("auth.php");  
?>

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
  <body class="app sidebar-mini" onLoad="initGeolocation();">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="">E-LEARNING</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
       
   
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
         
            <li><a class="dropdown-item" href="usereditdash.php"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="logout.php"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
			<li><a class="dropdown-item" href="edituser.php"><i class="fa fa-sign-out fa-lg"></i> EDIT PROFILE</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
       <aside class="app-sidebar">
      <div class="app-sidebar__user">
        <div>
          <p class="app-sidebar__user-name">Welcome: <?php echo $_SESSION['username']; ?></p>

        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Profile</span></a></li>
		
		 <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Learn Sign-Language</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="alpha.php"><i class="icon fa fa-circle-o"></i>Learn Alphabets </a></li>
            
			<li><a class="treeview-item" href="action.php"><i class="icon fa fa-circle-o"></i>Learn Actions</a></li>
			 <li><a class="treeview-item" href="viewvideo.php"><i class="icon fa fa-circle-o"></i>Learn Subjects</a></li>
            <li><a class="treeview-item" href="viewtest.php"><i class="icon fa fa-circle-o"></i>Take Test</a></li>
			 <li><a class="treeview-item" href="vewans.php"><i class="icon fa fa-circle-o"></i>View Result</a></li>
  
          </ul>
        </li>
        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Book appointment</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
			<li><a class="treeview-item" href="specilalist.php"><i class="icon fa fa-circle-o"></i>Find and BOOK Specialist</a></li>
            
			<li><a class="treeview-item" href="apstatus.php"><i class="icon fa fa-circle-o"></i>Appointment status</a></li>
            <li><a class="treeview-item" href="deletephp.php"><i class="icon fa fa-circle-o"></i>Cancel appointment</a></li>
  
          </ul>
        </li>
        
       
		 <li><a class="app-menu__item" href="treatmenthistory.php"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Treatment history</span></a></li>
        
        <li><a class="app-menu__item" href="nearby.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Near by Search</span></a></li>
	<li><a class="app-menu__item" href="emmergency.php"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Emmergency request</span></a></li>
		
      </ul>

    </aside>
    <main class="app-content">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.carousel{
    background: #2f4357;
    margin-top: 20px;
}
.carousel .item{
    min-height: 480px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
.bs-example{
	margin: 20px;
}
</style>
</head>
<body>
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="img\img\a.jpg" alt="Slide">
            </div>
           <div class="item ">
                <img src="img\img\b.jpg" alt="Slide">
            </div>
			<div class="item">
                <img src="img\img\c.jpg" alt="Slide">
            </div>
				<div class="item ">
                <img src="img\img\d.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\e.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\f.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\g.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\h.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\i.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\j.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\k.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\l.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\m.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\n.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\o.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\p.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\q.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\r.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\s.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\t.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\u.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\v.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\w.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\x.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\y.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\z.jpg" alt="Slide">
            </div>
			<div class="item ">
                <img src="img\img\aa.jpg" alt="Slide">
            </div>
			</div>
            
			
			
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
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
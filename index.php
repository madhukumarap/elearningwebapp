<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>E-LEARNING</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
	<style>
.dropbtn {
    background-color: #687178;
    color: white;
    padding: 14px;
    font-size: 14px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #2980B9;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #226673;
    min-width: 160px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #ddd}

.show {display:block;}
</style>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">E-LEARNING </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Services</a>
            </li>
			 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact-us</a>
            </li>
			
            <li class="nav-item">
              <button onclick="myFunction()" class="dropbtn"  class="nav-link js-scroll-trigger">LOGIN/SIGNUP</button>
		<div id="myDropdown" class="dropdown-content">
			<a class="nav-link js-scroll-trigger" href="http://localhost/elearning/login.php">USER</a>
			<a href="doctorlogin.php">CONSULTANT</a>
			<a href="http://localhost/elearning/entlogin.php">MEDICAL SERVICE</a>
			<a href="http://localhost/elearning/adminlogin.php">ADMIN</a>
		</div>
            </li>  
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="brand-heading"> E-LEARNING  </h2>
              <p class="intro-text">LEARN INDIAN SIGN LANGUAGE 
                <br>FOR PHYSICAL CHALLENGE PEOPLE</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>E-LEARNING</h2>
            <p>‘E-LEARNING APPLICATION’ is used for proposing a health application that provides an efficient way to keep track on individual’s health. In the age of new technology where one can have applications on every aspect of our lives, having an application that addresses treating of patients in their home or in their current location.

            <p>Based on the user location, if in case of an emergency condition like accident, serious health issues etc.  When that time user can get ambulance service. This application will also help the users to keep track of their health condition in the form of case-sheets and services provides an health information( e.g., prescription, medication instruction, taking-medicine time, reminding schedule back to the clinic, health nursing) through application after visiting a doctor and the medicines will get updated automatically</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">
          <h2>OUR SERIVICES</h2>
         
           <a href="">USER</a>
		   <p>USER CAN LEARN INDIAN SIGN LANGUAGE, TAKE APPOINTMENT ANY WHERE,SEARCH NEAR BY HOSPITAL, CLINIC, etc AND ALSO PRACTICE TEST </p>
		   <a href="">DOCTOR</a>
		   <p>DOCTOR CAN PROVIDE SERVICES BY APPROVE APPOINTMENT REQUEST</p>
		   <a href="">MEDICAL SERVICE PROVIDER</a>
		   <p>MEDICAL SERVICE PROVIDER CAN POST THEIR SERVICE INFORMATION AND PROVIDE SERVICE FOR WHO SENT REQUEST </p>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>DEVELOPED BY : HEMANTHA GOUD </h2>
            
              <a href="">WE ARE HAPPY TO HELP YOU</a>
               <p>WE DESIGN THIS APPLICATION IT IS PLATFORM FOR USER, DOCTOR AND SERVICE PROVIDER.</p>
			
          </div>
        </div>
      </div>
    </section>
	<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

    <!-- Map Section -->
    <div id="map"></div>

    <!-- Footer 
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Your Website 2019</p>
      </div>
    </footer> -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

   

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>

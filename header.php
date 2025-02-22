<?php
    include('session.php');
    $query ="SELECT * FROM applicants";


?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>508 Bytes Software Private Limited</title>
    <!-- google-fonts -->
    <link href="//fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- //google-fonts -->
    <!-- Font-Awesome-Icons-CSS -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <!-- Template CSS Style link -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <!---  cdn link   -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.lineicons.com/3.0/lineicons.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon.ico">
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDklUmd7kj2m0jCzh5KC0Btz4hr4ZyXi-s&callback=console.debug&libraries=maps,marker&v=beta">
    </script>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    
</head>

<body>
    <!--header-->
    <header id="site-header" class="fixed-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg stroke px-0">
                <h1>
                    <a class="navbar-brand" href="index.php">
                        <img src="./assets/images/Logo.png" width="150" alt="">
                    </a>
                </h1>
                <!-- if logo is image enable this   
                <a class="navbar-brand" href="#index.php">
                    <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                </a> -->
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                    <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>
                <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  border-radius: 10px;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  border-bottom: 1px sol;
}

.dropdown-content a:hover {
    /* background-color: black; */
    color: #EA6E23;
    text-decoration: none;
}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'home' ? 'active' : ''; ?>">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'about' ? 'active' : ''; ?>">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'service' ? 'active' : ''; ?>">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'contact' ? 'active' : ''; ?>">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'career' ? 'active' : ''; ?>">
                            <a class="nav-link" href="career.php">Career</a>
                        </li>
                        <li class="nav-item <?php echo $_SESSION['Page'] == 'career' ? 'active' : ''; ?>">
                            <a class="nav-link" href="career.php"></a>
                        </li>
                        <!-- search button -->
                        <?php              
                            //  $attendance =                 
                            if(isset($_SESSION['FirstName'])){
                                echo '<li class="nav-item" >
                                <div class="dropdown">
                                    <a class="nav-link" >'.$_SESSION['FirstName'].' '.$_SESSION['LastName'].'</a>
                                    <div class="dropdown-content">
                                        <a href="profile.php">Profile</a>
                                        <a href="emp_attendance.php">Attendance</a>
                                        <a href="logout.php">Logout</a>
                                    </div>
                                </div>
                                
                                </li>';
                            } 
                            else{
                                echo '<li class="nav-item" ><a class="nav-link" href="login.php">Login</a></li>';    
                            }
                        ?>
                        
                        <!-- //search button -->
                    </ul>
                </div>
                <!-- //search button -->
                <!-- toggle switch for light and dark theme -->
                <div class="cont-ser-position">
                    <nav class="navigation">
                        <div class="theme-switch-wrapper">
                            <label class="theme-switch" for="checkbox">
                                <input type="checkbox" id="checkbox">
                                <div class="mode-container">
                                    <i class="gg-sun"></i>
                                    <i class="gg-moon"></i>
                                </div>
                            </label>
                        </div>
                    </nav>
                </div>
                <!-- //toggle switch for light and dark theme -->
            </nav>
        </div>
    </header>
    <!--//header-->
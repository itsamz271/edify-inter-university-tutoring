<?php
 include ('EdifyDB.php');
session_start();
?>



<html>
    <head>
    
    
    <script src="Vendors/JS/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="Vendors/ionicons-2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css">    
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/w3.css">
    
    <link href="Vendors/bootstrap-4.4.1-dist/css/bootstrapreg.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="Vendors/bootstrap-4.4.1-dist/js/bootstrapreg.min.js"></script>
    <script src="Vendors/bootstrap-4.4.1-dist/js/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
	<link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    
		<!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
		
    <title>Tutee Registration | Edify</title>
    </head> 
    
    
    <body class="aboutUsBody">
            <!---------------NAVIGATION BAR-------------->
        <div>
        <header class="headersignup">
            <nav>
                <div class="myRow">
                    <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="homePage.html">Home</a></li>
                        <li><a href="SearchForCourses.php">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="LoginPage.html">Log in</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        </div>

        <div class="wholeform">
            
        <article class="container rounded article1">
        <div class="container">
            <form action=" "class="form-horizontal" role="form" method="post">
                <h2 class="h22">Login</h2>
                <div class="form-group myform">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Enter account Email" class="form-control1" autofocus name="email">
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Enter Password" class="form-control1" name="password">
                    </div>
                </div>
                <div class="myform form-group sameline">
                    <a href="SignupTutee%202.0.html"><p class="account">Dont have an account?</p></a>
                    <a href="#"><p class="forget">Forget Password?</p></a>
                </div>
                <div class="form-group myform">
                    <div class="col-sm-9 col-sm-offset-3">
                        <a href="UpcomingSessions.php"><button type="submit"  name="submit" class="btn btn-primary btn-block">Sign In</button></a>
                    </div>
                </div>
                <?php 


                if(isset($_POST['submit'])){
    $email = mysqli_real_escape_string($db,$_POST['email']); 
    $pass = mysqli_real_escape_string($db,$_POST['password']);
    
    
    if($email =="" || $pass =="" ){
        echo "Email or Password field is empty";
        echo "<br/>";
        echo "<a href='LoginPage.php'>Go back</a>";
        
        
    }else{
        $result = mysqli_query($db,"SELECT * FROM tutee WHERE TuteeEmail = '$email' AND TuteePassword = '$pass' ") or die("could not excute the selected query");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)){
            $validEmail = $row['TuteeEmail'];
            $_SESSION ['valid'] = $validEmail;
            print_r($_SESSION);
            
            
        }else{
            echo "<div class ='main'> Inavlid Email or password. </div>";
            echo "<br/>";
            echo "<div class='main' <a herf='homePage.php'>Go Back</a> </div>";
        }
        if(isset($_SESSION['valid'])){
            
            header('Location: UpcomingSessions.php');
            var_dump($_SESSION);
        }
        
    }
}else{
    echo" submit doesnt work";
}
?>
            </form> <!-- /form -->
        </div> <!-- ./container -->
            </article>
            <br><br><br><br>
        </div>
        
        <!--------FOOTER SITE---------->
        <footer class="site-footer">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-md-6">
                    <h6>About</h6>
                    <p class="text-justify">Edify.com Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>

                  <div class="col-xs-6 col-md-3">
                    <h6>Categories</h6>
                    <ul class="footer-links">
                      <li><a>Mathematics</a></li>
                      <li><a>Physics</a></li>
                      <li><a>Chemistry</a></li>
                      <li><a>Biology</a></li>
                      <li><a>Java</a></li>
                      <li><a>C++</a></li>
                    </ul>
                  </div>

                  <div class="col-xs-6 col-md-3">
                    <h6>Quick Links</h6>
                    <ul class="footer-links">
                      <li><a>About Us</a></li>
                      <li><a>Contribute</a></li>
                      <li><a>Privacy Policy</a></li>
                      <li><a>Sign up</a></li>
                    </ul>
                  </div>
               <div class="col-xs-6 col-md-3">
            <h6>Contact Us</h6>
            <ul class="footer-links">
              <li><a>Phone: +966525503303</a></li>
              <li><a>Email: 217210628@psu.edu.sa</a></li>
            </ul>
          </div> 
                </div>
                <hr>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-sm-6 col-xs-12">
                    <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
                 <a href="#">Edify</a>.
                    </p>
                  </div>

                  <div class="col-md-4 col-sm-6 col-xs-12">
                    <ul class="social-icons">
                      <li><a><i class="fab fa-facebook-f"></i></a></li>
                      <li><a><i class="fab fa-twitter"></i></a></li>
                      <li><a><i class="fab fa-instagram-square"></i></a></li>
                      <li><a><i class="fab fa-linkedin"></i></a></li>   
                    </ul>
                  </div>
                </div>
              </div>
        </footer>
    </body>
</html>
<?php
session_start();

if (!isset($_SESSION['valid'])){
    header('Location: LoginPage.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script>document.getElementsByTagName("html")[0].className += "js";</script>
    
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    <link rel="stylesheet" href="Vendors/bootstrap-4.4.1-dist/css/style1.css">
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
	<link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 

    <!--------------- link for the css page-------------->

    <link rel="stylesheet" type="text/css" href="my-profile.css">
    
    <!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
    
    <title>My Profile  | Edify</title>
    
    </head>
    
    <body class="UpcomingSessionsBody">      
            
        <header>
            <!---------------NAVIGATION BAR-------------->
            <nav>
                <div class="myRow">
                    <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="UpcomingSessions.php">Home</a></li>
                        <li><a href="SearchForCourses.php">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                    </ul>
                </div>
            </nav>
             
        </header>
        
        
        <div class ="bg">
        <section>
          <div class="container">
            <div class="row mt-5">
              <h2>
                MY SETTINGS
              </h2>
            </div>
            
           </div>
          </section>

          <section>
            <div class="container">
              <div class="row">
                <div class="col-6 ml-5 ">
                    <label for="email"> First Name: </label>
                    <input type="text" class="form-control" id="first" style="width: 350;margin: 0 auto" >

                    <div class="mt-5">
                    <label for="email"> Last Name: </label>
                    <input type="text" class="form-control" id="first" style="width: 350;margin: 0 auto" >
                    </div>
                </div>
                <div class="col-2"></div>
                <div class="col-3 "> 
                  <img src="Resources/Images/my-profile.png">


                    <div class="text-center ">
                      
                     <button  target="_blank" type="submit" class="btn btn-outline-dark mr-4">Update</button>
                   </div>


                </div>
              </div>
            </div>
          </section>
          <div class="container">
            <hr>
          </div>
          <section>
            <div class="container">
              <h5 class="ml-5">Email Address</h5>
              <div class="row ml-5">
                <div class="col-9">
                  Change Your E-mail Address
                  
                </div>
                 <div class="col-2  "> 
                    <div class="text-center ">
                      
                     <button  target="_blank" type="submit" class="btn btn-outline-dark mr-4">Change</button>
                   </div>
                </div>
                
              </div>
                <hr>
            </div>
          </section>

           <section>
            <div class="container">
              <h5 class="ml-5">Password</h5>
              <div class="row ml-5">
                <div class="col-9">
                  Change your Password
                  
                </div>
                 <div class="col-2  "> 
                    <div class="text-center ">
                      
                     <button  target="_blank" type="submit" class="btn btn-outline-dark mr-4">Change</button>
                   </div>
                </div>
                
              </div>
                <hr>
            </div>
          </section>
          <section >
            <div class="container ">
				
			<div class="ml-5 ">
                  <a href="Logout.php"><button target="_blank" type="submit" class=" btn btn-outline-dark mr-4 mb-3 mt-3 ">LOG OUT</button></a>
              </div>	
              <div class="ml-5 ">
                  <button target="_blank" type="submit" class=" btn btn-outline-dark mr-4 mb-3 mt-3 ">Delete my account</button>
              </div>

              
            </div>
          </section>

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


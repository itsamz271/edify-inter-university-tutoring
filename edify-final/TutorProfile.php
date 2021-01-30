<!DOCTYPE html>
<?php
include ('EdifyDB.php');
session_start();

$tutorID = $_GET['tutorID'];
$_SESSION['TutorID'] = $tutorID;


$sql = "SELECT * FROM tutor WHERE TutorID = '$tutorID'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);

$profession = $row['TutorProfession'];
$degree = $row['TutorDegree'];
$phoneNumber = $row['TutorPhoneNumber'];
$email = $row['TutorEmail'];
$tutorDescription = $row['TutorQ4'];
$profilePicture = $row['imgProfile'];
$tutorFirstName = $row['TutorFirstNmae'];
$tutorLastName = $row['TutorLastName'];
                        
                       
                   
                            /* getting the out from the sql with the sql sysntax below*/
                   $sql = "SELECT courses.CourseCode,courses.CourseDescription FROM courses,coursestaught WHERE coursestaught.CourseCode = courses.CourseCode AND coursestaught.TutID = '$tutorID'";
                  
                    /* reults we want to disply */
$result = mysqli_query($db,$sql);
/* checking if we have results start */
                        /* getting the output start */
while( $runrows = mysqli_fetch_assoc( $result ) ){
        $CC = $runrows['CourseCode'];
    $CD = $runrows['CourseDescription'];
}
                   ?>
<html>
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    
    
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
	<link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
    
    <!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
    
    <!---------------The icons for the review boxes-------------->
   <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-4.0.3.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"> 
    
    
    
    
    <title>Tutor Profile | Edify</title>
    
    </head>
    
    <body class="TutorProfileBody">      
            
        <header>
            <!---------------NAVIGATION BAR-------------->
            <nav>
                <div class="myRow">
                    <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="homePage.php">Home</a></li>
                        <li><a href="SearchForCourses.php">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="LoginPage.php">Log in</a></li>
                    </ul>
                </div>
            </nav>
             
        </header>
        
        
        
        
            <!-------------------Tutor Information ----------------->
        <section>
            
             <!-- added a new div tag that is called Tutor Information (div 1) -->
            <div class="TutorInformation">
                
                <!-- added a new div tag that contains the information -->
                <div id="TutorInfo" class="container Info">
                    
                     <div class="container">
                         

                        <div class="section-title">
                          <h2>About Tutor</h2>
                        </div>

                        <div class="row">
                          <div class="col-lg-4" data-aos="fade-right">
                            <img src="Resources/Images/Dr1.PNG" class="img-fluid" alt="">
                          </div>
                            
                          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
                            <h3><?php echo $tutorFirstName . ' ' . $tutorLastName?></h3>
                            <div class="row">
                                
                              <div class="col-lg-6">
                                <ul>
                                  <li><i class="icofont-rounded-right"></i> <strong>Profession:</strong> <?php echo $profession?></li>
                                  <li><i class="icofont-rounded-right"></i> <strong>Phone:</strong> <?php echo $phoneNumber?></li>
                                </ul>
                              </div>
                                
                              <div class="col-lg-6">
                                <ul>
                                  <li><i class="icofont-rounded-right"></i> <strong>Degree:</strong> <?php echo $degree?></li>
                                  <li><i class="icofont-rounded-right"></i> <strong>Email:</strong> <?php echo $email?></li>
                                </ul>
                              </div>
                            </div>
                            <p>
                             <?php echo $tutorDescription?>
                            </p>
                          </div>
                        </div>
                 </div>  
        </div>
    </div>
            
            
            
            
            
            
                    <!---------- Courses Taught ----------->
            
            <!-- added a new div tag that is called Courses Taught (div 2) -->
            <div class="CoursesTaught">
                
                <!-- added a new div tag that contains the courses -->
                <div id="AllCourses" class="container Info2">
                    <h2> Courses Taught </h2>
                  
                    <!-- container for all the cards -->
                       
                    <div class="container">
                     
                        <div class="row">
                           
                            <!--- php part for the displaying the courses Start--->
                            <div class="col-lg-3 col-sm-6 mb-4">
                                <div class="card border-0 shadow rounded-xs pt-5">
                                    <div class="card-body"> <img src="Resources/Images/Teaching2.png" alt="teaching" class="img-fluid">
                                        <h4 class="mt-4 mb-3"><?php echo $CC?></h4>
                                        <p><?php echo $CD ?></p>
                                    </div>
                                </div>
                                <!--- php part for the displaying the courses END--->
                            </div>
                           
                        </div>
                        
                  </div>     
        </div>
    </div>
            
            
            
            
            
            
            
                    <!----------Tutor Reviews ------------->
            
             <!-- added a new div tag that is called Tutor Reviews (div 3) -->
            <div class="TutorReviews">
                
                <!-- added a new div tag that contains the reviews  -->
                <div id="TutorRev" class="container Info3">
                    <h2> Reviews </h2>
                    
                    <!-- A container for all the boxes of rating and reviews -->
                    <div class="container-fluid px-1 py-5 mx-auto">
                        
                        <!-- The div for the first rating box -->
                        <div class="row justify-content-left">
                            <div class="col-xl-7 col-lg-8 col-md-10 col-12 text-center mb-5">
                                <div class="card-for-reviews">
                                    <div class="row justify-content-left d-flex">
                                        <div class="col-md-4 d-flex flex-column">
                                            <div class="rating-box">
                                                <h1 class="pt-4">4.1/5</h1>   
                                            </div>
                                            <div> <i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>
								<i class="fas fa-star"></i>	</div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="rating-bar0 justify-content-center">
                                                <table class="text-left mx-auto">
                                                    <tr>
                                                        <td class="rating-label">Extremely Satisfied</td>
                                                        <td class="rating-bar">
                                                            <div class="bar-container">
                                                                <div class="bar-5"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">50</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="rating-label">Satisfied</td>
                                                        <td class="rating-bar">
                                                            <div class="bar-container">
                                                                <div class="bar-4"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">23</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="rating-label">Neutral</td>
                                                        <td class="rating-bar">
                                                            <div class="bar-container">
                                                                <div class="bar-3"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">10</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="rating-label">Unsatisfied</td>
                                                        <td class="rating-bar">
                                                            <div class="bar-container">
                                                                <div class="bar-2"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">3</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="rating-label">Extremely Unsatisfied</td>
                                                        <td class="rating-bar">
                                                            <div class="bar-container">
                                                                <div class="bar-1"></div>
                                                            </div>
                                                        </td>
                                                        <td class="text-right">0</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Now all The divs for the reviews -->
                                <div class="card-for-reviews2">
                                    <div class="row d-flex">
                                        <div class=""> <img class="profile-pic" src="Resources/Images/Student1.PNG"> </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="mt-2 mb-0">Beau Alexander</h3>
                                            <div>
                                                <p class="text-left"><span class="text-muted">4.1</span> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
							<i class="far fa-star"></i>	</p>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="text-muted pt-5 pt-sm-3">10 May</p>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <h4 class="blue-text mt-3">"Amazing tutor in Edify"</h4>
                                        <p class="content">I have just started from a very basic understanding and I'm quickly adapts the level to meet yours, while at the same time demands your full focus and intensity to learn as much as possible during the lessons. Fantastic so far, would recommend to anyone..</p>
                                    </div>
                                    
                                    <div class="row text-left mt-4">
                                        <div class="like mr-3 vote"><i class="fas fa-thumbs-up"></i><span class="blue-text pl-2">20</span> </div>
                                        <div class="unlike vote"> <i class="far fa-thumbs-down"></i><span class="text-muted pl-2">4</span> </div>
                                    </div>
                                </div>
                                
                                <div class="card-for-reviews2">
                                    <div class="row d-flex">
                                        <div class=""> <img class="profile-pic" src="Resources/Images/Student2.PNG"> </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="mt-2 mb-0">David Emmett</h3>
                                            <div>
                                                <p class="text-left"><span class="text-muted">5</span> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
							<i class="fas fa-star"></i>	</p>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="text-muted pt-5 pt-sm-3">3 September</p>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <h4 class="blue-text mt-3">"An awesome experience"</h4>
                                        <p class="content">Jack has taught my son since this summer. He is very experienced and knowledgeable. He keeps his lesson effective, engaging and fun. My son is able to stay focus and overcome his fear of writing. We definitely plan to keep working with Michael..</p>
                                    </div>
                                    
                                    <div class="row text-left mt-4">
                                        <div class="like mr-3 vote"><i class="fas fa-thumbs-up"></i><span class="blue-text pl-2">34</span> </div>
                                        <div class="unlike vote"> <i class="far fa-thumbs-down"></i><span class="text-muted pl-2">6</span> </div>
                                    </div>
                                </div>
                                
                                <div class="card-for-reviews2">
                                    <div class="row d-flex">
                                        <div class=""> <img class="profile-pic" src="Resources/Images/Student3.PNG"> </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="mt-2 mb-0">David Hollis</h3>
                                            <div>
                                                <p class="text-left"><span class="text-muted">4.6</span> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>	 <span class="fa fa-star star-inactive"></span></p>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="text-muted pt-5 pt-sm-3">2 April</p>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <h4 class="blue-text mt-3">"Edify is the best"</h4>
                                        <p class="content">Jack is an excellent tutor who is very knowledgeable and conveys her knowledge of complex material in a manner easily understandable. Highly recommended..</p>
                                    </div>
                                    
                                    <div class="row text-left mt-4">
                                        <div class="like mr-3 vote"><i class="fas fa-thumbs-up"></i><span class="blue-text pl-2">12</span> </div>
                                        <div class="unlike vote"> <i class="far fa-thumbs-down"></i><span class="text-muted pl-2">1</span> </div>
                                    </div>
                                </div>
                                
                                <div class="card-for-reviews2">
                                    <div class="row d-flex">
                                        <div class=""> <img class="profile-pic" src="Resources/Images/Student4.PNG"> </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="mt-2 mb-0">John Dale</h3>
                                            <div>
                                                <p class="text-left"><span class="text-muted">4.3</span> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>	</p>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="text-muted pt-5 pt-sm-3">4 April</p>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <h4 class="blue-text mt-3">"Keep going Jack"</h4>
                                        <p class="content">Jack is the best tutor! He helped me with organic chemistry this summer and was immensely helpful. He was great at explaining everything, and tutoring sessions weren't boring at all. I couldn't have done so well in Orgo without him!!!.</p>
                                    </div>
                                    
                                    <div class="row text-left mt-4">
                                        <div class="like mr-3 vote"><i class="fas fa-thumbs-up"></i><span class="blue-text pl-2">40</span> </div>
                                        <div class="unlike vote"> <i class="far fa-thumbs-down"></i><span class="text-muted pl-2">1</span> </div>
                                    </div>
                                </div>
                                
                                <div class="card-for-reviews2">
                                    <div class="row d-flex">
                                        <div class=""> <img class="profile-pic" src="Resources/Images/Student5.PNG"> </div>
                                        <div class="d-flex flex-column">
                                            <h3 class="mt-2 mb-0">Noah Presley</h3>
                                            <div>
                                                <p class="text-left"><span class="text-muted">4.4</span> <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>	</p>
                                            </div>
                                        </div>
                                        <div class="ml-auto">
                                            <p class="text-muted pt-5 pt-sm-3">17 April</p>
                                        </div>
                                    </div>
                                    <div class="row text-left">
                                        <h4 class="blue-text mt-3">"I got the most benefit"</h4>
                                        <p class="content">Scott helped me find some weaknesses right away in my first lesson. He was also very upfront about what I needed to change with my study plan. I will continue working with him.</p>
                                    </div>
                                    
                                    <div class="row text-left mt-4">
                                        <div class="like mr-3 vote"><i class="fas fa-thumbs-up"></i><span class="blue-text pl-2">33</span> </div>
                                        <div class="unlike vote"> <i class="far fa-thumbs-down"></i><span class="text-muted pl-2">4</span> </div>
                                    </div>
									
                                </div>
                               
                                <p class=""></p>  
                                
                
                     </div>
							
                 </div>
						<div class="text-center">
									<a href="bookingPage.php?tutorID=<?php echo $tutorID?>"><button type="submit" name="submit" class="btn btn-outline-dark btn-lg btn-block">Book a tutor</button></a>
								</div>
            </div>
        </div>
    </div>                         
</section>
                                                    <!-- The End of the Tutor page -->
        
        
            
            
        
            
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    
    
    <!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
    
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
 
    <title>Home | Edify</title>
    
    </head>
    
    <body class="homeBody">      
            
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
            
            <!---------------SEARCH BAR------------------->
            <!-- Search form start -->
            <form action="SearchForCourses.php" method="post">
            <div id="searchBarBox" class="text-center container searchBarBox">
                <h1>Search Subject</h1>
                
                <div class="active-pink-4 mb-4">
                  <input class="form-control" type="search" name="search" placeholder="Search Subject i.e Calculus" aria-label="Search">
                </div>
               <button type="submit" name="submit" class="btn btn-outline-light">Search</button>
            </div> 
            </form>
            <!-- Search form END -->
            <!------Search Code start---->
              <?php
                /* getting the search value start */
                        if (isset($_POST['submit'])){  
                     $search = mysqli_real_escape_string($db,$_POST['search']);
                            /* getting the out from the sql with the sql sysntax below*/
                   $sql = "SELECT tutor.TutorFirstNmae,tutor.TutorLastName,coursestaught.CourseCode,tutor.TutorPhoneNumber,tutor.TutorEmail FROM tutor,coursestaught,courses WHERE tutor.TutorID = coursestaught.TutID AND coursestaught.CourseCode = courses.CourseCode AND courses.CourseDescription LIKE '%$search%' OR coursestaught.CourseCode LIKE '%$search%' AND coursestaught.CourseCode = courses.CourseCode AND tutor.TutorID = coursestaught.TutID";
                     $result = mysqli_query($db,$sql);
                     $queryResult = mysqli_num_rows($result);
            
                     /* checking if we have results start */
                     if ($queryResult >0){
                        /* getting the output start */
                        while( $runrows = mysqli_fetch_assoc( $result ) ) 
                        { 
                            $fName = $runrows['TutorFirstNmae'];
                            $lname = $runrows['TutorLastName'];
                            $CC = $runrows['CourseCode'];
                            $phone = $runrows['TutorPhoneNumber'];
                            $email = $runrows['TutorEmail'];
                        }
                         /* getting the output END */
                     
                         
                 
                                }else{
                         echo"there are no results in the topic of your search";
                     }
                            
                            /* checking if we have results END */
                   
                        }
   /* gettingthe search value END */    
                    ?>
            <!------Search Code End----->
        </header>
        
        <!-------STEPS BOX -------->
        <div class="stepsBox">
            <h2>Using Edify</h2>

            <div class="container text-center">
                <div class="row">
                    
                    <br>
                    <p class="long-copy stepsBox">Simple and easy to use. Book a tutor in three quick steps</p>
                </div>
            <div class="row">
                <div class="col-sm text-center">
                    <i class="fas fa-book-open fa-9x"></i>
                    <h3>Search for a course</h3>
                
                </div>
                <div class="col-sm text-center">
                  <i class="fas fa-chalkboard-teacher fa-9x"></i>
                    <h3>Find a Tutor</h3>
                </div>
                <div class="col-sm text-center">
                  <i class="far fa-calendar-alt fa-9x"></i>
                    <h3>Book a session</h3>
                </div>
              </div>
            </div>
        </div>
        
        <!-------PURPOSE BOX-------->
        <div class="objectiveBox">
            <h2>Why Choose Edify?</h2>
            <div class="container logoText">
                <div class="row">
                    <div class="col text-center">
                        <img src="Resources/Images/Edify%20Logo.png">
                    </div>
                    <div class="col text-center">
                        <p class="long-copy"> We aspire to bring out the best in all the students on the website willing to learn from experts around the world. We provide a service that most websites don't which is the tutors. Our tutors are selected by a team of specialists that have been in the field for more than a decade. Our tutors can provide their help in more than 5 languages to ensure that you get the best level of education possible.</p>
                    </div>
                </div>
                </div>
        </div>
        
        <!----------Tutor Registration------------>
        <div class="tutorRegistration text-center">
            <h2>BECOME A TUTOR</h2>
            <a href="SignupTutor2.0.html"><button type="button" class="btn btn-outline-dark">Apply</button></a>
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
<!DOCTYPE html>

<?php 
    include 'EdifyDB.php';
    session_start();       
?>





<html>
<head>
    <script src="Vendors/jquery-3.5.0.js"></script>
    <script src="Resources/JavaScript/multiStepForm.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    
	<!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
	
    <title>Search Your Tutor | Edify</title>
    
    </head>
    
    <body class="SearchPageBody">
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
            <!-------SEARCH FORM CARD AND TUTOR LIST--------->
      <form action="SearchForCourses.php" method="post">
        <div class="multiStepForm">
            <!------Form action for the search----->
            
            <div class="container">
                
				<div class="input-group mb-3">
  <input type="search" name="search" class="form-control" placeholder="Search Subject i.e Calculus" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
  </div>
</div>
                </div>
                
                <h2 class="float-center tutorListHeading">Tutor List</h2>
            
            
            <!------the PHP CODE START HERE---->
                        <?php
                        
                        /* getting the search value start */
                        if (isset($_POST['submit'])){  
                     $search = mysqli_real_escape_string($db,$_POST['search']);
                   
                            /* getting the out from the sql with the sql sysntax below*/
                   $sql = "SELECT tutor.TutorID, tutor.TutorFirstNmae,tutor.TutorLastName,coursestaught.CourseCode,tutor.TutorPhoneNumber,tutor.TutorEmail FROM tutor,coursestaught,courses WHERE tutor.TutorID = coursestaught.TutID AND coursestaught.CourseCode = courses.CourseCode AND courses.CourseDescription LIKE '%$search%' OR coursestaught.CourseCode LIKE '%$search%' AND coursestaught.CourseCode = courses.CourseCode AND tutor.TutorID = coursestaught.TutID ";
                  
                    /* reults we want to disply */
                    $result = mysqli_query($db,$sql);
                     $queryResult = mysqli_num_rows($result);
                 
                            ?>
            <!------the PHP CODE CUTS FROM HERE ---->
            
            
            <!------ styling the results we got fro the SQL START----->
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.9.95/css/materialdesignicons.css" rel="stylesheet">
<div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="show-results mt-4">
                        <div class="float-left">
                            <h5 class="text-dark mb-0 pt-2">Showing  Results : 1-9 of <?php echo $queryResult?></h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <div class="left-sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapseOne" class="job-list" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="card-header" id="headingOne">
                                        <h6 class="mb-0 text-dark f-18">Rating</h6>
                                    </div>
                                </a>
                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio1">5 Stars</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio2">4 Stars</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio3">3 Stars</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio4">2 Stars</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio5">1 Stars</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapsetwo" class="job-list" aria-expanded="true" aria-controls="collapsetwo">
                                    <div class="card-header" id="headingtwo">
                                        <h6 class="mb-0 text-dark f-18">Pricing</h6>
                                    </div>
                                </a>
                                <div id="collapsetwo" class="collapse show" aria-labelledby="headingtwo">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck7">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck7">1 To 50</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck8">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck8">51 To 100</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck3">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck3">101 To 150</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck4">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck4">151 To 200</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck5">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck5">201 To 250</label>
                                        </div>

                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck6">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customCheck6">251 To 300</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                            
                            <div class="card mt-4">
                                <a data-toggle="collapse" href="#collapsefour" class="job-list" aria-expanded="true" aria-controls="collapsefour">
                                    <div class="card-header" id="headingfour">
                                        <h6 class="mb-0 text-dark f-18">Gender</h6>
                                    </div>
                                </a>
                                <div id="collapsefour" class="collapse show" aria-labelledby="headingfour">
                                    <div class="card-body p-0">
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio13" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio13">Male</label>
                                        </div>

                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio14" name="customRadio3" class="custom-control-input">
                                            <label class="custom-control-label ml-1 text-muted f-15" for="customRadio14">Female</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- collapse one end -->
                        </div>
                    </div>
                </div>
 
          
                        
                <div class="col-lg-9">
                         
                    <div class="row">
                        <!---- the code continue from here start---->
                  <?php
                     /* checking if we have results start */
                     if ($queryResult >0){
                        /* getting the output start */
                        while( $runrows = mysqli_fetch_assoc( $result ) ) 
                  { 
							$tutID = $runrows['TutorID'];
                            $fName = $runrows['TutorFirstNmae'];
                            $lname = $runrows['TutorLastName'];
                            $CC = $runrows['CourseCode'];
                            $phone = $runrows['TutorPhoneNumber'];
                            $email = $runrows['TutorEmail'];
                            ?>
                        <div class="col-lg-4 col-md-6">
                        
                            <div class="list-grid-item mt-4" style="background-color: white;">
                                <div class="grid-item-content p-2" >
                             
                                    <div class="employers-list-img mt-3">
                                        <img src="Resources/Images/ProfilePic.png" class="img-fluid mx-auto d-block rounded-circle">
                                    </div>
                                    <div class="grid-list-desc mt-4">
                                        <div class="text-center">
                                        <h5 class="mb-1"><a href="#" class="text-dark">   <?php echo $fName?> </a></h5>
                                        <h5 class="mb-1"><a href="#" class="text-dark">   <?php echo $lname?></a></h5>
                                        </div>
                                        <div class="text-center">
                                        <p class="text-muted fontSize mb-0"> <i class="fas fa-book mr-2">   <?php echo $CC?></i></p>
                                        <p class="text-muted fontSize mb-0"><i class="fas fa-phone mr-2">   <?php echo $phone?></i></p>
                                         <p class="text-muted fontSize mb-0"><i class="fas fa-envelope mr-2">   <?php echo $email?></i></p>
                                        </div>
                                        <div class="text-center">
                                        <ul class="employers-icons list-inline mb-1">
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                            <li class="list-inline-item"><a href="#" class="text-warning"><i class="mdi mdi-star f-19"></i></a></li>
                                        </ul>
                                        </div>
                                    </div>
                            
                                </div>
                                <hr class="mt-0 mb-0">
                                <div class="apply-button text-center mt-2 mb-2">
                                    <a href="TutorProfile.php?tutorID=<?php echo $tutID?> " class="button btn btn-primary btn-sm">Book</a>
                                </div>
                            </div>
                               
                        </div>
                        <?php }
                         /* getting the output END */
                     
                         
                 
                            } 
                            /* checking if we have results END */
                   
                        }
   /* gettingthe search value END */    
                        ?>
            <!----the code end in here----->  
                    </div>
                     
                </div>
                 
            </div>
 <!------ styling the results we got fro the SQL END----->
    
    <!-------Limit the reults pagenation panel style start----->
                   
      <!-------Limit the reults pagenation panel style END----->
        </div>

          </div>
                </form>
          
          
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
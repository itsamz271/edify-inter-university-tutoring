<?php session_start();?>



<?php
			include ('EdifyDB.php');
			if (!isset($_SESSION['valid'])){
				header('Location: LoginPage.php');
			}

			
			
			$tuteeID = $_SESSION['TuteeID'];
			$tutorID = $_SESSION['TutorID'];

			
			
			
			if(isset($_POST['submit']))
			{
				$sessionDate = $_REQUEST['sessionDate'];
				$sessionTime = $_REQUEST['sessionTime'];
				$sessionCourse = $_REQUEST['sessionCourse'];
				


				$ins_query= "INSERT INTO `session` (`SessionTime`, `SessionDay`, `SessionPrice`, `sessionCourse`, `TutorID`, `TuteeID`) VALUES ('$sessionTime', '$sessionDate', '25', '$sessionCourse', '$tutorID', '$tuteeID');";

				mysqli_query($db, $ins_query);
			}


?>

<!DOCTYPE html>
<html>
<head>
    <script src="Vendors/jquery-3.5.0.js"></script>
    <script src="Resources/JavaScript/multiStepForm.js"></script>
    
    
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    
	<!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
	
    <title>Book Your Tutor | Edify</title>
    
    </head>
    
    <body class="bookingPageBody">
        <header>
            <!---------------NAVIGATION BAR-------------->
            <nav>
                <div class="myRow">
                    <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="UpcomingSessions.php">Home</a></li>
                        <li><a href="SearchForCourses.php">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href='myProfile.php'>My Profile</a></li>
                    </ul>
                </div>
            </nav>
            
            <!-------BOOKING FORM CARD--------->
            <div class="bookingCard">
                
            </div>
        </header>
        
        
        <div class="multiStepForm">
            <div class="container-fluid" id="grad1">
                <div class="row justify-content-center mt-0">
                    <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-3 mb-2">
                        <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                            <h2><strong>Book Session</strong></h2>
                            
                            <div class="row">
                                <div class="col-md-12 mx-0">
                                    <form id="msform" method="post" action="">
                                        <!-- progressbar -->
                                        <ul id="progressbar">
                                            <li class="active" id="account"><strong>Choose Time Slot</strong></li>
                                            
                                            <li id="payment"><strong>Payment</strong></li>
                                            <li id="confirm"><strong>Finish</strong></li>
                                        </ul> <!-- fieldsets -->
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title text-center">Choose time slot</h2> 
                                                <h3 class="text-center"><strong>Select Day</strong></h3>
                                                
                                                <select class="browser-default custom-select selectDay"
														name="sessionDate" id="sessionDate">
                                                      <option selected class="">Date</option>
                                                      <option value="2020-05-01">2020-05-01</option>
                                                      <option value="2020-05-02">2020-05-02</option>
                                                      <option value="2020-05-03">2020-05-03</option>
                                                      <option value="2020-05-04">2020-05-04</option>
                                                      <option value="2020-05-05">2020-05-05</option>
                                                      <option value="2020-05-06">2020-05-06</option>
                                                      <option value="2020-05-07">2020-05-07</option>
                                                    </select>
                                                
                                                <h3 class="text-center selectTime"><strong>Select Time</strong></h3>
                                                
                                                <select class="browser-default custom-select selectTime" name="sessionTime" id="sessionTime">
                                                      <option selected class="">Time</option>
                                                      <option value="13:00:00">1:00 PM</option>
                                                      <option value="14:00:00">2:00 PM</option>
                                                      <option value="15:00:00">3:00 PM</option>
                                                      <option value="16:00:00">4:00 PM</option>
                                                      <option value="17:00:00">5:00 PM</option>
                                                      <option value="18:00:00">6:00 PM</option>
                                                      <option value="19:00:00">7:00 PM</option>
                                                    </select>
												
												<h3 class="text-center selectTime"><strong>Select Course</strong></h3>
                                                 
                                           
                                                <select class="browser-default custom-select selectTime"
														name="sessionCourse" id="sessionCourse">
                                                    
                                                      <option selected class="">Course</option>
                                                    <!---- php part for diaplyibg the courses that the Tutor teachcStart---->
                                                     <?php
                                                /* checking if we have results start */
                                                 
                                                    $sql = "SELECT * FROM coursestaught WHERE TutID = '$tutorID'";
                                                    $result = mysqli_query($db,$sql);
                                                    
                                                    /* getting the output start */
                                                    while( $row = mysqli_fetch_assoc($result)){
                                                    $CC = $row['CourseCode'];
                                                    }
                                                    $courses = $CC;
                                                    ?>
                                                      <option value="CourseCode"><?php echo $courses?></option>
                                                 <!---- php part for diaplyibg the courses that the Tutor teachc END---->
                                                    </select>
                                                  
                                            </div> 
											<input type="button" name="next" class="next action-button" value="Next" />
											
								
                                        </fieldset>
                                        
                                        <fieldset>
                                            <div class="form-card">
                                                <h2>Payment Information</h2>
                                                <div class="radio-group text-center">
                                                    <div class='radio' data-value="credit"><img src="Resources/Images/creditCard.jpg" width="200px" height="100px"></div>
                                                    <div class='radio' data-value="paypal"><img src="Resources/Images/paypal.jpg" width="200px" height="100px"></div> <br>
                                                </div> <label class="pay">Card Holder Name*</label> <input type="text" name="holdername" placeholder="" />
                                                <div class="row">
                                                    <div class="col-9"> <label class="pay">Card Number*</label> <input type="text" name="cardno" placeholder="" /> </div>
                                                    <div class="col-3"> <label class="pay">CVC*</label> <input type="password" name="cvcpwd" placeholder="***" /> </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-3"> <label class="pay">Expiry Date*</label> </div>
                                                    <div class="col-9"> <select class="list-dt" id="month" name="expmonth">
                                                            <option selected>Month</option>
                                                            <option>January</option>
                                                            <option>February</option>
                                                            <option>March</option>
                                                            <option>April</option>
                                                            <option>May</option>
                                                            <option>June</option>
                                                            <option>July</option>
                                                            <option>August</option>
                                                            <option>September</option>
                                                            <option>October</option>
                                                            <option>November</option>
                                                            <option>December</option>
                                                        </select> <select class="list-dt" id="year" name="expyear">
                                                            <option selected>Year</option>
                                                        </select> </div>
                                                </div>
                                            </div> <input type="button" name="previous" class="previous action-button-previous" value="Previous" /> <input type="button" name="make_payment" class="next action-button" value="Confirm" />
                                        </fieldset>
										<?php
										
										$sql = "SELECT * FROM tutor WHERE TutorID = '$tutorID'";
										$result = mysqli_query($db,$sql);
										$row = mysqli_fetch_assoc($result);
										
										$tutorFirstName = $row['TutorFirstNmae'];
										$tutorLastName = $row['TutorLastName'];
										
										?>
										
                                        <fieldset>
                                            <div class="form-card">
                                                <h2 class="fs-title text-center">Booking confirmed!</h2> <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-3"> <img src="https://img.icons8.com/color/96/000000/ok--v2.png" class="fit-image"> </div>
                                                </div> <br><br>
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <h5>Tutor Name: <br><br><?php echo $tutorFirstName . ' ' . $tutorLastName ?><br><br>Session added to Upcoming Sessions!</h5>
                                                    </div>
                                                </div>
                                                
                                                <div class="row justify-content-center">
                                                    <div class="col-7 text-center">
                                                        <a href=UpcomingSessions.php><button class="action-button" type="submit" name="submit">Return</button></a>
                                                    </div>
                                                </div>
                                                
                                                
                                            </div>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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


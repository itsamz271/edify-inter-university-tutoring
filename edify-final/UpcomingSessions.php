<?php session_start();?>
<?php
 include ('EdifyDB.php');
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
    
    
    <link rel="stylesheet" href="Vendors/bootstrap-4.4.1-dist/css/style1.css">
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
	<link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
    <!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
    
    <title>Upcoming Sessions | Edify</title>
    
    </head>
    
    <body class="UpcomingSessionsBody">      
            
        <header>
            <!---------------NAVIGATION BAR-------------->
            <nav>
                <div class="myRow">
                    <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="logo">
                    <ul class="main-nav">
                        <li><a href="homePage.php">Home</a></li>
                        <li><a href="SearchForCourses.php">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="myProfile.php">My Profile</a></li>
                    </ul>
                </div>
            </nav>
             
        </header>
        
        
        
        <!-------------------UPCOMING SESSIONS----------------->
        <section>
              <!---php Code start--->
            <?php  
            $email = $_SESSION['valid'];
            
			
			$sql1 = "SELECT * FROM tutee WHERE TuteeEmail = '$email'";
			$result1 = mysqli_query($db,$sql1);
			$row = mysqli_fetch_assoc($result1);
			
			$id = $row['TuteeID'];
			
			$_SESSION['TuteeID'] = $id;
			
			
			
            $sql = "SELECT tutor.TutorFirstNmae,tutor.TutorLastName,session.sessionCourse,session.SessionTime,session.SessionDay FROM tutor,session WHERE tutor.TutorID = session.TutorID AND session.TuteeID = '$id' ";
			
			
			
			
			
             /* reults we want to disply */
                    $result = mysqli_query($db,$sql);
                     $queryResult = mysqli_num_rows($result);
             
                    
            ?>
             <!-- added a new div tag that is called Ubcomming sessions -->
            <div class="UpcommingSessions">
                
                <!-- added a new div tag that contains the cards -->
                <div id="AllCards" class="container Cards">
                    <h2> Upcoming Sessions </h2>
                    
                 <!--Div for the first sessions group-->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">
                        
                      <!--Slides-->
                      <div class="carousel-inner" role="listbox">

                        <!--First slide-->
                        <div class="carousel-item active">
                          
                            <?php
                            if ($queryResult >0){
                        /* getting the output start */
                                while( $runrows = mysqli_fetch_assoc( $result ) ) 
                  { 
                            $fName = $runrows['TutorFirstNmae'];
                            $lname = $runrows['TutorLastName'];
                            $SC = $runrows['sessionCourse'];
                            $ST = $runrows['SessionTime'];
                            $SD = $runrows['SessionDay'];
        ?>
                          
                            <!--First Card-->
                          <div class="col-md-3" style="float:left">
                           <div class="card mb-2 card border-0 shadow rounded-xs pt-5">
                              <img class="card-img-top"
                                src="Resources/Images/Dr1.PNG" alt="Card image cap">
                              <div class="card-body">
                                <h4 class="card-title"><?php echo $fName?> <?php echo $lname?> </h4>
                                <p class="card-text">- <?php echo $SC?></p>
                                <p class="card-text">- <?php echo $ST?></p>
                                  <p class="card-text">- <?php echo $SD?></p>
                              </div>
                            </div>
                          </div>
                                    <?php
    }
                            }
                         
?>
                             <!---php Code END--->
                        </div>
                        <!--/.First slide-->

                  </div>
                 <!--/.Slides-->

            </div>
            <!--/.Carousel Wrapper--> 
                    
                    
                  
            <!--/.Carousel Wrapper-->  
                    
        </div>
    </div>
            
            
            
            
            
                     <!----------------- SCHEDULES ----------------->
            <div class="Schedules">
                <div id="AllSchedules" class="container Cards">
                    <h1> Weekly Schedule </h1>
                
                    <div class="cd-schedule cd-schedule--loading margin-top-lg margin-bottom-lg js-cd-schedule">
                        <div class="cd-schedule__timeline">
                          <ul>
                                <li><span>09:00</span></li>
                                <li><span>09:30</span></li>
                                <li><span>10:00</span></li>
                                <li><span>10:30</span></li>
                                <li><span>11:00</span></li>
                                <li><span>11:30</span></li>
                                <li><span>12:00</span></li>
                                <li><span>12:30</span></li>
                                <li><span>13:00</span></li>
                                <li><span>13:30</span></li>
                                <li><span>14:00</span></li>
                                <li><span>14:30</span></li>
                                <li><span>15:00</span></li>
                                <li><span>15:30</span></li>
                                <li><span>16:00</span></li>
                                <li><span>16:30</span></li>
                                <li><span>17:00</span></li>
                                <li><span>17:30</span></li>
                                <li><span>18:00</span></li>
                          </ul>
                        </div> <!-- .cd-schedule__timeline -->

                        <div class="cd-schedule__events">
                          <ul>
                            <li class="cd-schedule__group">
                              <div class="cd-schedule__top-info"><span>Sunday</span></div>

                              <ul>
                                <li class="cd-schedule__event">
                                  <a data-start="09:00" data-end="10:00" data-content="CS330 class" data-event="event-1" href="#0">
                                    <em class="cd-schedule__name">CS330</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="11:00" data-end="12:30" data-content="PHY205 class" data-event="event-2" href="#0">
                                    <em class="cd-schedule__name">PHY205</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="14:00" data-end="15:00"  data-content="STAT101 class" data-event="event-3" href="#0">
                                    <em class="cd-schedule__name">STAT101</em>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="cd-schedule__group">
                              <div class="cd-schedule__top-info"><span>Monday</span></div>

                              <ul>
                                <li class="cd-schedule__event">
                                  <a data-start="10:00" data-end="11:00"  data-content="ACC101" data-event="event-2" href="#0">
                                    <em class="cd-schedule__name">ACC101</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="11:30" data-end="12:30"  data-content="ARAB101" data-event="event-4" href="#0">
                                    <em class="cd-schedule__name">ARAB101</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="13:30" data-end="15:00" data-content="PHY105" data-event="event-1" href="#0">
                                    <em class="cd-schedule__name">PHY105</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="15:45" data-end="17:00"  data-content="CME112" data-event="event-3" href="#0">
                                    <em class="cd-schedule__name">CME112</em>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="cd-schedule__group">
                              <div class="cd-schedule__top-info"><span>Tuesday</span></div>

                              <ul>
                                <li class="cd-schedule__event">
                                  <a data-start="09:00" data-end="10:15" data-content="ISC105" data-event="event-4" href="#0">
                                    <em class="cd-schedule__name">ISC105</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="10:45" data-end="11:45" data-content="FIN301" data-event="event-3" href="#0">
                                    <em class="cd-schedule__name">FIN301</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="12:00" data-end="13:30"  data-content="STAT271" data-event="event-2" href="#0">
                                    <em class="cd-schedule__name">STAT271</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="13:45" data-end="15:00" data-content="CS285" data-event="event-3" href="#0">
                                    <em class="cd-schedule__name">CS285</em>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="cd-schedule__group">
                              <div class="cd-schedule__top-info"><span>Wednesday</span></div>

                              <ul>
                                <li class="cd-schedule__event">
                                  <a data-start="09:30" data-end="10:30" data-content="SE401" data-event="event-1" href="#0">
                                    <em class="cd-schedule__name">SE401</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="12:00" data-end="13:45" data-content="CYS403" data-event="event-4" href="#0">
                                    <em class="cd-schedule__name">CYS403</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="15:30" data-end="16:30" data-content="AVM340" data-event="event-1" href="#0">
                                    <em class="cd-schedule__name">AVM340</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="17:00" data-end="18:30"  data-content="LAW492" data-event="event-2" href="#0">
                                    <em class="cd-schedule__name">LAW492</em>
                                  </a>
                                </li>
                              </ul>
                            </li>

                            <li class="cd-schedule__group">
                              <div class="cd-schedule__top-info"><span>Thursday</span></div>

                              <ul>
                                <li class="cd-schedule__event">
                                  <a data-start="10:00" data-end="11:00"  data-content="MATH111" data-event="event-2" href="#0">
                                    <em class="cd-schedule__name">MATH111</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="12:30" data-end="14:00" data-content="MATH225" data-event="event-1" href="#0">
                                    <em class="cd-schedule__name">MATH225</em>
                                  </a>
                                </li>

                                <li class="cd-schedule__event">
                                  <a data-start="15:45" data-end="16:45"  data-content="MATH113" data-event="event-3" href="#0">
                                    <em class="cd-schedule__name">MATH113</em>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </div>

                        <div class="cd-schedule-modal">
                          <header class="cd-schedule-modal__header">
                            <div class="cd-schedule-modal__content">
                              <span class="cd-schedule-modal__date"></span>
                              <h3 class="cd-schedule-modal__name"></h3>
                            </div>

                            <div class="cd-schedule-modal__header-bg"></div>
                          </header>

                          <div class="cd-schedule-modal__body">
                            <div class="cd-schedule-modal__event-info"></div>
                            <div class="cd-schedule-modal__body-bg"></div>
                          </div>

                          <a href="#0" class="cd-schedule-modal__close text-replace">Close</a>
                        </div>

                        <div class="cd-schedule__cover-layer"></div>
                </div>                                    
        </div>                            <!--------- END of the SCHEDULES div -------->
    </div>       
                 
</section>
        
        
        
        
        
        
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
        
        <!-- ********** The Script code for the Schedules ********** -->
        <script src="Vendors/bootstrap-4.4.1-dist/js/util.js"></script> 
        <script src="Vendors/bootstrap-4.4.1-dist/js/main.js"></script>
   </body>
    
       
    
</html>
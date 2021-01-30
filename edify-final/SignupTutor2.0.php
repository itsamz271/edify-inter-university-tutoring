<?php
require('EdifyDB.php');//or use require_once whenever your website load, one time only it will call db.php. other times it will not call

if(isset($_POST['Submit'])){
    
$fName = $_REQUEST['tutorF'];
$lname = $_REQUEST['tutorL'];
$em = $_REQUEST['tutorEmail'];
$pass = $_REQUEST['tutorPass'];
$phone = $_REQUEST['tutorNumber'];
$Bdate = $_REQUEST['tutorDate'];
$time = $_REQUEST['tutorTime'];
$gender = $_REQUEST['tutorGender'];
$degree = $_REQUEST['degree'];
$prof = $_REQUEST['profession'];
$Q1 = $_REQUEST['experience'];
$Q2 = $_REQUEST['platform'];
$Q3 = $_REQUEST['outsideTutoring'];    
$Q4 = $_REQUEST['Description'];
$Course1 = $_REQUEST['Course1'];
$Course2 = $_REQUEST['Course2'];
$Course3 = $_REQUEST['Course3'];    
$imgProfile = $_REQUEST['tutorImage'];

$ins_query="INSERT INTO `tutor` (`TutorFirstNmae`, `TutorLastName`, `TutorEmail`, `TutorPassword`, `TutorPhoneNumber`, `TutorDateOfBirth`, `TutorDegree`, `TutorProfession`, `Timezone`, `TutorGender`, `TutorQ1`, `TutorQ2`, `TutorQ3`, `TutorQ4`, `Course1`, `Course2`, `Course3`, `imgProfile`) VALUES('$fName', '$lname', '$em', md5('$pass'), '$phone', '$Bdate', '$degree', '$prof', '$time', '$gender', '$Q1',  '$Q2', '$Q3', '$Q4', '$Course1', '$Course2', '$Course3', '$imgProfile')";    
mysqli_query($db,$ins_query);
    echo "$fName $lname $em $pass $phone $Bdate $degree $prof $time $gender $Q1 $Q2 $Q3 $Q4 $Course1 $Course2 $Course3 $imgProfile ";
}
?>
<html>
    <head>
        
    <link rel="stylesheet" type="text/css" href="Vendors/ionicons-2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css">    
    <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
    
    
    <link href="Vendors/bootstrap-4.4.1-dist/css/bootstrapreg.min.css" rel="stylesheet" id="bootstrap-css">
		
    <script src="Vendors/bootstrap-4.4.1-dist/js/bootstrapreg.min.js"></script>
    <script src="Vendors/bootstrap-4.4.1-dist/js/jquery-1.11.1.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
	<link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
    
	<!---------------These two links for our logo in the Title of the page-------------->
    <link href="Resources/Images/Edify%20Logo.png" rel="icon">
		
    <title>Tutor Registration | Edify</title>
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
                        <li><a href="SearchForCourses.html">Search Tutors</a></li>
                        <li><a href="aboutUs.html">About Us</a></li>
                        <li><a href="LoginPage.html">Log in</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        </div>

        <div class="wholeform">
            <br><br><br><br>
        <article class="container rounded article1">
        <div class="container">
            
            <form class="form-horizontal" role="form" action="" method="post">
                
                <h2>TUTOR REGISTRATION</h2><br>
                <div class="form-group myform">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="tutorF" placeholder="First Name" class="form-control" autofocus name="tutorF" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="tutorL" placeholder="Last Name" class="form-control" autofocus name="tutorL" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="tutorEmail" placeholder="Email" class="form-control" name="tutorEmail" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="tutorPass" placeholder="Password" class="form-control" name="tutorPass" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="password" class="col-sm-3 control-label"> Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="cpassword" placeholder="Confirm Password" class="form-control" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="birthDate" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="number" id="tutorNumber" class="form-control" placeholder="Enter Phone Number" name="tutorNumber" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="tutorDate" class="form-control" name="tutorDate" required>
                    </div>
                </div>
				<div class="form-group myform">
                    <label for="lastName" class="col-sm-3 control-label">Degree</label>
                    <div class="col-sm-9">
                        <input type="text" id="degree" placeholder="Degree" class="form-control" autofocus name="degree" required>
                    </div>
                </div>
				<div class="form-group myform">
                    <label for="lastName" class="col-sm-3 control-label">Profession</label>
                    <div class="col-sm-9">
                        <input type="text" id="profession" placeholder="profession" class="form-control" autofocus name="profession" required>
                    </div>
                </div>
                <div class="form-group myform">
                    <label for="country" class="col-sm-3 control-label">Choose your Timezone</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="tutorTime" id="tutorTime" required>
                    <option timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</option>
                    <option timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</option>
                    <option timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</option>
                    <option timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</option>
                    <option timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
                    <option timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</option>
                    <option timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</option>
                    <option timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
                    <option timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
                    <option timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</option>
                    <option timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US & Canada)</option>
                    <option timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
                    <option timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</option>
                    <option timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
                    <option timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
                    <option timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</option>
                    <option timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
                    <option timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</option>
                    <option timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</option>
                    <option timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</option>
                    <option timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</option>
                    <option timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</option>
                    <option timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</option>
                    <option timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</option>
                    <option timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</option>
                    <option timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</option>
                    <option timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</option>
                    <option timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</option>
                    <option timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
                    <option timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
                    <option timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
                    <option timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
                    <option timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
                    <option timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
                    <option timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</option>
                    <option timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</option>
                    <option timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</option>
                    <option timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</option>
                    <option timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</option>
                    <option timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</option>
                    <option timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
                    <option timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</option>
                    <option timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</option>
                    <option timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</option>
                    <option timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
                    <option timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
                    <option timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</option>
                    <option timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</option>
                    <option timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</option>
                    <option timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</option>
                    <option timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</option>
                    <option timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</option>
                    <option timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</option>
                    <option timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</option>
                    <option timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
                    <option timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</option>
                    <option timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
                    <option timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</option>
                    <option timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</option>
                    <option timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</option>
                    <option timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</option>
                    <option timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
                    <option timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</option>
                    <option timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
                    <option timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</option>
                    <option timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
                    <option timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</option>
                    <option timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</option>
                    <option timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
                    <option timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</option>
                    <option timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</option>
                    <option timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</option>
                    <option timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</option>
                    <option timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</option>
                    <option timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</option>
                    <option timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</option>
                    <option timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</option>
                    <option timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</option>
                    <option timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
                    <option timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</option>
                    <option timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
                    <option timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</option>
                </select>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group myform">
                    <label for="country" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="tutorGender" name="tutorGender" required>
                    <option selected>Select your gender</option>   
                    <option value="Male">Male</option>   
                    <option value="Female">Female</option>  
                            </select>
                        </div>
                    </div>
                <br>
                <h2><b>Course Selection</b></h2>
                <div class="form-group myform">
                    <label for="course1" class="col-sm-3 control-label">Course 1</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="Course1" name="Course1" required>
                    <option selected>Select your Course</option>   
                 <?php
                                   /* checking if we have results start */
                                                 
                                  $sql = "SELECT * FROM courses ";
                                    $result = mysqli_query($db,$sql);
                                                    
                                     /* getting the output start */
                                    while( $row = mysqli_fetch_assoc($result)){
                                     $CC = $row['CourseCode'];
                         ?>
                                                  
                       <option value="<?php echo $CC?>"><?php echo $CC?></option> 
                            <?php } ?>       
                            </select>
                        </div>
                    </div>
                <div class="form-group myform">
                    <label for="course2" class="col-sm-3 control-label">Course 2</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="Course2" name="Course2">
                    <option selected>Select your Course</option>   
                   <?php
                                   /* checking if we have results start */
                                                 
                                  $sql = "SELECT * FROM courses ";
                                    $result = mysqli_query($db,$sql);
                                                    
                                     /* getting the output start */
                                    while( $row = mysqli_fetch_assoc($result)){
                                     $CC = $row['CourseCode'];
                         ?>
                                                  
                       <option value="<?php echo $CC?>"><?php echo $CC?></option> 
                            <?php } ?>  
                            </select>
                        </div>
                    </div>
                <div class="form-group myform">
                    <label for="course3" class="col-sm-3 control-label">Course 3</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="Course3" name="Course3">
                    <option selected>Select your Course</option>        
                   <?php
                                   /* checking if we have results start */
                                                 
                                  $sql = "SELECT * FROM courses ";
                                    $result = mysqli_query($db,$sql);
                                                    
                                     /* getting the output start */
                                    while( $row = mysqli_fetch_assoc($result)){
                                     $CC = $row['CourseCode'];
                         ?>
                                                  
                       <option value="<?php echo $CC?>"><?php echo $CC?></option> 
                            <?php } ?>  
                            </select>
                        </div>
                    </div>
                <br>
                <h2><b>Question Segment</b></h2>
        <div class="col-7 container">
            <br>
        <p>Do you have any previous work experience?</p>    
        <textarea class="textarea1" name="experience" id="experience" required></textarea>
        </div><br><br>
        <div class="col-7 container">
            <br>
        <p>What platform are you comfortable tutoring on?</p>    
        <textarea class="textarea1" name="platform" id="platform" required></textarea>
        </div><br><br>
        <div class="col-7 container">
            <br>
        <p>How many hours per week do tutor outside of Edify (if any)?</p>    
        <textarea class="textarea1" name="outsideTutoring" id="outsideTutoring" required></textarea>
        </div><br><br>
        <div class="col-7 container">
            <br>
        <p>Give us a brief description about yourself?</p>    
        <textarea class="textarea1" name="Description" id="Description" required></textarea>
        </div><br><br>
        <div class="col-7 container">
            <br>
        <p>Upload a photo of yourself:</p>    
        <input type="file" id="tutorImage" name="tutorImage" required>
        </div><br><br>        
                <div class="form-group myform">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" required>I accept the <a href="Terms&Conditions.html" required>terms & conditions</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group myform">
                    <div class="col-sm-9 col-sm-offset-3">
                        <a href="UpcomingSessions.php"><button type="submit" name="Submit" value="submit" class="btn btn-primary btn-block">Join Us</button></a>
                    </div>
                </div>
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
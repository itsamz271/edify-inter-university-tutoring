<?php
    require('EdifyDB.php');
?>


<!DOCTYPE html>
<html>
    <head>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css"></script>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap-grid.min.css"></script>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap-reboot.css"></script>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap-grid.css"></script>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap-reboot.min.css"></script>
        <script src="Vendors/bootstrap-4.4.1-dist/css/bootstrap.min.css"></script>
        <script src="Vendors/jquery-3.5.0.js"></script>
        <script src="Resources/JavaScript/multiStepForm.js"></script>
    
    
        <link rel="stylesheet" type="text/css" href="Vendors/bootstrap-4.4.1-dist/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="Resources/CSS/style.css">
        <link rel="stylesheet" type="text/css" href="Vendors/fontawesome-free-5.13.0-web/css/all.css"> 
        <link rel="stylesheet" type="text/css" href="Vendors/ionicons-2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" type="text/css" href="Vendors/fontawesomeicons.css">
        
		<link href="Resources/Images/Edify%20Logo.png" rel="icon">
		
        <title>Admin Panel | Edify</title>
    </head>


<body class="adminBody">
    
    <div class="container-fluid pageBG">
        <div class="row pageBG">
            <!-----SIDE BAR----->  
            <div class="col-lg-2 adminSideBar border border-dark">
                <div class ="row adminTitle border border-dark">
                    <div class ="col-lg-12 text-center">
                        <h3 class="adminText">ADMIN</h3>
                    </div>
                </div>
                <div class ="row border border-dark">
                    &nbsp;
                    <div class="col-lg-12 text-center"> 
                        <i class="fas fa-chart-pie fa-2x"></i>
                        <div class ="adminTextAlign">
                            <h3 class = "adminTextMedium">ANALYTICS: </h3>
                        </div>
                    </div> 
                </div>
                <div class ="row border border-dark adminButton"> 
                    <div class ="col-lg-10 d-flex justify-content-center">
                        <button type="button" class="btn"><i class="fas fa-database fa-4x"></i></button>
                        
                    </div>
                    <div class ="col-lg-2 d-flex justify-content-center">
                        <div>
                            &nbsp;
                            <i class="fas fa-chevron-right fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class ="row border border-dark adminButton"> 
                    <div class ="col-lg-10 text-center">
                        <button type="button" class="btn"><i class="fas fa-graduation-cap fa-4x"></i></button>
                    </div>
                    <div class ="col-lg-2 d-flex justify-content-center">
                        <div>
                            &nbsp;
                            <i class="fas fa-chevron-right fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class ="row border border-dark adminButton">
                    <div class ="col-lg-10 text-center">
                        <button type="button" class="btn"><i class="fas fa-chalkboard-teacher fa-4x"></i></button>
                    </div>
                    <div class ="col-lg-2 d-flex justify-content-center">
                        <div>
                            &nbsp;
                            <i class="fas fa-chevron-right fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class ="row border border-dark adminButton">
                    <div class ="col-lg-10 text-center">
                        <button type="button" class="btn"><i class="fas fa-handshake fa-4x"></i></button>
                    </div>
                    <div class ="col-lg-2 d-flex justify-content-center">
                        <div>
                            &nbsp;
                            <i class="fas fa-chevron-right fa-2x"></i>
                        </div>
                    </div>
                </div>
                <div class ="row adminSpace">
                    <div class ="col-lg-12">
                        
                    </div>
                </div>
                <div class ="row adminReturnArea">
                    <div class ="col-lg-12 d-flex justify-content-center">
                        <button type="button" class="btn adminReturn btn-dark">Return</button>
                    </div>
                </div>
            </div>
            <!----END OF SIDEBAR --->
            <!----- PAGE ----->
            <div class="col-lg-10 adminPage border border-dark">
                <!----- TOP NAV ----->
                <div class ="row adminNav border border-dark ">
                    <div class ="col-lg-2 content-justify-center">
                        <img src="Resources/Images/Edify%20Logo.png" alt="Edify logo" class="adminLogo">
                    </div>
                    <div class ="col-lg-8 text-center">
                        <div class="row adminTitleSpace">
                        </div>
                        <h3 class="adminTextXL"> DASHBOARD </h3>
                    </div>
                    <div class ="col-lg-1 adminHover">
                        <div>
                            <i class="fas fa-users-cog fa-4x"></i>
                        </div>
                    </div>
                </div>
                <!--- END OF TOP NAV --->
                <div class="row adminNav2">
                    
                </div>
                <div class="row adminTableSpace">
                    <div class ="col-lg-1">
                    </div>
                    <div class ="col-lg-10 d-flex justify-content-center">
                        <table class="table table-striped table-bordered table-dark table-hover adminTable0">
                            
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col"> ID </th>
                                <th scope="col"> Name </th>
                                <th scope="col"> FName</th>
                                <th scope="col"> Email </th>
                                <th scope="col"> Password </th>
                                <th scope="col"> Phone </th>
                                <th scope="col"> Birthdate </th>
                                <th scope="col"> Timezone </th>
                                <th scope="col"> Gender </th>
                            </tr>
                            </thead>
                            
                            <tbody>
                                 <?php
                    $sql = "SELECT * FROM tutee;";
                    $result = mysqli_query($db, $sql);
                    $resultCheck = mysqli_num_rows($result);
                
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['TuteeID']; ?></td>
                                    <td><?php echo $row['TuteeFirstName']; ?></td>
                                    <td><?php echo $row['TuteeLastName']; ?></td>
                                    <td><?php echo $row['TuteeEmail']; ?></td>
                                    <td><?php echo $row['TuteePassword']; ?></td>
                                    <td><?php echo $row['TuteePhoneNumber']; ?></td>
                                    <td><?php echo $row['TuteeDateOfBirth']; ?></td>
                                    <td><?php echo $row['TimeZone']; ?></td>
                                    <td><?php echo $row['TuteeGender']; ?></td>
                                    
                                    
                                </tr>
                                <?php
                                }
                    }
                                mysqli_close($db);
                ?>
                                
                            </tbody>
                            
                        </table>
                    </div>
                    <div class ="col-lg-1">
                    </div>
                    
                    
                </div>
                
            </div>
            <!--- END OF PAGE --->
        </div>
        
    </div>
  
</body>
</html>
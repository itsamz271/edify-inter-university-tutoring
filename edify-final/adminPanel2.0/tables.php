<!DOCTYPE html>

<?php
    require('EdifyDB.php');
?>
<?php include('process.php');?>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
    

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      

      <!-- Nav Item (CHANGE LINK TO TABLE) - Crud -->
      
      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            
              

            <!-- Nav Item (change the HREF path)--->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-home"></i>
              </a>
              </li>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Abdulaziz Ashy</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          

          <!-- Tutee table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tutees</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> FName</th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Phone </th>
                                <th> Birthdate </th>
                                <th> Timezone </th>
                                <th> Gender </th>
                                <th> Edit </th>
                                <th> Delete </th>
                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <!-- FORM SUBMIT SECTION FOR TABLE -->
                        
                        
                                <th> ID </th>
                                <th> Name </th>
                                <th> FName</th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Phone </th>
                                <th> Birthdate </th>
                                <th> Timezone </th>
                                <th> Gender </th>
                                <th> Edit </th>
                                <th> Delete </th>
                                
                            
                    </tr>
                  </tfoot>
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
                                    <!--Delete Tutee -->
                                    <td>
                                        <a href="tables.php?edit=<?php echo             $row['TuteeID']; ?>" class ="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="process.php?delete=<?php echo              $row['TuteeID']; ?>" class = "btn               btn-danger">Delete</a>
                                    </td>
                                    
                                    
                                </tr>
                                <?php
                                }
                    }
                                
                ?>
                  </tbody>
                </table>
                  <!-- insert -->
                  <br>
                  <form action = "process.php" method ="POST">
                      <input type="hidden" name ="TuteeID" value="<?php echo $TuteeID; ?>">
                      <div class="form-row justify-content-center">
                          <div class="col">
                                <input class="form-control" type ="text" name ="TuteeFirstName" value="<?php echo $TuteeFirstName; ?>" placeholder="Name..."> 
                              </div>
                          <div class="col">
                                <input class="form-control" type ="text" name ="TuteeLastName" value="<?php echo $TuteeLastName; ?>"  placeholder="Last Name...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="email" name ="TuteeEmail" value="<?php echo $TuteeEmail; ?>"  placeholder="Email...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="password" name ="TuteePassword" value="<?php echo $TuteePassword; ?>"  placeholder="Password...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="number" name ="TuteePhoneNumber" value="<?php echo $TuteePhoneNumber; ?>" placeholder="Phone Number...">
                           </div>
                          <div class="col">
                                <input class="form-control" type ="date" name ="TuteeDateOfBirth" value="<?php echo $TuteeDateOfBirth; ?>"  placeholder="Birthday...">
                          </div>
                          <div class="col">
                              <input class="form-control" type ="text" name ="TimeZone" value="<?php echo $TimeZone; ?>" placeholder ="country...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="text" name ="TuteeGender" value="<?php echo $TuteeGender; ?>" placeholder="Gender..."> 
                          </div>
                          <div class="col">
                              <!-- UPDATE -->
                                <?php
                                if($update==true):
                                    
                                ?>
                                <a><button class="btn btn-primary btn-block" type="submit" name="update">Update</button> </a>
                                <?php 
                                else:
                                ?>
                                <a><button class="btn btn-info btn-block" type="submit" name="save">Save</button> </a>
                              <?php endif; ?>
                            </div>
                                
                            </div>
                        </form>
                    
              </div>
            </div>
          </div>
            
        

        </div>
        <!-- /.container-fluid -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">


          

          <!-- Tutor table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tutors</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> FName</th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Phone </th>
                                <th> Birthdate </th>
                                <th> Degree</th>
                                <th> Profession</th>
                                <th> Timezone </th>
                                <th> Gender </th>
                                <th> Q1 </th>
                                <th> Q2 </th>
                                <th> Q3 </th>
                                <th> Q4 </th>
                                <th> Course 1</th>
                                <th> Course 2</th>
                                <th> Course 3</th>
                                <th> Edit </th>
                                <th> Delete </th>
                                
                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> FName</th>
                                <th> Email </th>
                                <th> Password </th>
                                <th> Phone </th>
                                <th> Birthdate </th>
                                <th> Degree</th>
                                <th> Profession</th>
                                <th> Timezone </th>
                                <th> Gender </th>
                                <th> Q1 </th>
                                <th> Q2 </th>
                                <th> Q3 </th>
                                <th> Q4 </th>
                                <th> Course 1</th>
                                <th> Course 2</th>
                                <th> Course 3</th>
                                <th> Edit </th>
                                <th> Delete </th>
                            
                    </tr>
                  </tfoot>
                    
                    
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM tutor;";
                    $result = mysqli_query($db, $sql);
                    $resultCheck = mysqli_num_rows($result);
                
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['TutorID']; ?></td>
                                    <td><?php echo $row['TutorFirstNmae']; ?></td>
                                    <td><?php echo $row['TutorLastName']; ?></td>
                                    <td><?php echo $row['TutorEmail']; ?></td>
                                    <td><?php echo $row['TutorPassword']; ?></td>
                                    <td><?php echo $row['TutorPhoneNumber']; ?></td>
                                    <td><?php echo $row['TutorDateOfBirth']; ?></td>
                                    <td><?php echo $row['TutorDegree']; ?></td>
                                    <td><?php echo $row['TutorProfession']; ?></td>
                                    <td><?php echo $row['Timezone']; ?></td>
                                    <td><?php echo $row['TutorGender']; ?></td>
                                    <td><?php echo $row['TutorQ1']; ?></td>
                                    <td><?php echo $row['TutorQ2']; ?></td>
                                    <td><?php echo $row['TutorQ3']; ?></td>
                                    <td><?php echo $row['TutorQ4']; ?></td>
                                    <td><?php echo $row['Course1']; ?></td>
                                    <td><?php echo $row['Course2']; ?></td>
                                    <td><?php echo $row['Course3']; ?></td>
                                    <!-- Tutor Delete -->
                                    
                                    <td><a href="tables.php?edit1=<?php echo $row['TutorID']; ?>" class ="btn btn-primary">Edit</a> </td>
                                    <td><a href="process.php?delete1=<?php echo $row['TutorID']; ?>" class = "btn btn-danger">Delete</a></td>
                                    
                                    
                                </tr>
                                <?php
                                }
                    }
                                
                ?>
                  </tbody>
                </table>
                  
                   <!-- insert for tutures-->
                  <br>
                  <form action = "process.php" method ="POST">
                      <input type="hidden" name ="TutorID" value="<?php echo $TutorID; ?>">
                      <div class="form-row justify-content-center">
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorFirstNmae" value="<?php echo $TutorFirstNmae; ?>" placeholder="Name..."> 
                              </div>
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorLastName" value="<?php echo $TutorLastName; ?>"  placeholder="Last Name...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="email" name ="TutorEmail" value="<?php echo $TutorEmail; ?>"  placeholder="Email...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="password" name ="TutorPassword" value="<?php echo $TutorPassword; ?>"  placeholder="Password...">
                          </div>
                          <div class="col">
                                <input class="form-control" type ="number" name ="TutorPhoneNumber" value="<?php echo $TutorPhoneNumber; ?>" placeholder="Phone Number...">
                           </div>
                          <div class="col">
                                <input class="form-control" type ="date" name ="TutorDateOfBirth" value="<?php echo $TutorDateOfBirth; ?>"  placeholder="Birthday...">
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorDegree" value="<?php echo $TutorDegree; ?>"  placeholder="Degree...">
                          </div>
                          
                           <div class="col">
                                <input class="form-control" type ="text" name ="TutorProfession" value="<?php echo $TutorProfession; ?>"  placeholder="Profession...">
                          </div>
                          
                          <div class="col">
                              <input class="form-control" type ="text" name ="Timezone" value="<?php echo $Timezone; ?>" placeholder ="country...">
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorGender" value="<?php echo $TutorGender; ?>" placeholder="Gender..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorQ1" value="<?php echo $TutorQ1; ?>" placeholder="Question1..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorQ2" value="<?php echo $TutorQ2; ?>" placeholder="Question2..."> 
                          </div>
                          
                            <div class="col">
                                <input class="form-control" type ="text" name ="TutorQ3" value="<?php echo $TutorQ3; ?>" placeholder="Question3..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="TutorQ4" value="<?php echo $TutorQ4; ?>" placeholder="Question4..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="Course1" value="<?php echo $Course1; ?>" placeholder="Course1..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="Course2" value="<?php echo $Course2; ?>" placeholder="Course2..."> 
                          </div>
                          
                          <div class="col">
                                <input class="form-control" type ="text" name ="Course3" value="<?php echo $Course3; ?>" placeholder="Course3..."> 
                          </div>
                          
                          
                          
                          
                          <div class="col">
                              
                              <!-- UPDATE -->
                                <?php
                                if($update1==true):
                                    
                                ?>
                                <a><button class="btn btn-primary btn-block" type="submit" name="update1">Update</button> </a>
                                <?php 
                                else:
                                ?>
                                <a><button class="btn btn-info btn-block" type="submit" name="save1">Save</button> </a>
                              <?php endif; ?>
                            </div>
                                
                            </div>
                        </form>
                  
                  
                  
                  
                  
                  
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">


          

          <!-- Session table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Sessions</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                <th> ID </th>
                                <th> Time </th>
                                <th> Day</th>
                                <th> Price </th>
                                <th> Course </th>
                                <th> TutorID </th>
                                <th> TuteeID </th>
                                <th> Action </th>
                                
                                
                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                                <th> ID </th>
                                <th> Time </th>
                                <th> Day</th>
                                <th> Price </th>
                                <th> Course </th>
                                <th> TutorID </th>
                                <th> TuteeID </th>
                                <th> Action </th>
                            
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM session;";
                    $result = mysqli_query($db, $sql);
                    $resultCheck = mysqli_num_rows($result);
                
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['SessionID']; ?></td>
                                    <td><?php echo $row['SessionTime']; ?></td>
                                    <td><?php echo $row['SessionDay']; ?></td>
                                    <td><?php echo $row['SessionPrice']; ?></td>
                                    <td><?php echo $row['sessionCourse']; ?></td>
                                    <td><?php echo $row['TutorID']; ?></td>
                                    <td><?php echo $row['TuteeID']; ?></td>
                                    <!-- Session Delete -->
                                    <td><a href="process.php?delete2=<?php echo $row['SessionID']; ?>" class = "btn btn-danger">Delete</a></td>
                                    
                                    
                                    
                                </tr>
                                <?php
                                }
                    }
                                
                ?>
                  </tbody>
                </table>
                  <!-- ADD FORM HERE-->
              </div>
            </div>
          </div>
            
        

        </div>
        <!-- /.container-fluid -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">


          

          <!-- Courses table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Courses</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                <th> ID </th>
                                <th> Code </th>
                                <th> Description </th>
                                <th> Edit </th>
                                <th> Delete </th>
                                
                                
                                
                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                                <th> ID </th>
                                <th> Code </th>
                                <th> Description </th> 
                                <th> Edit </th>
                                <th> Delete </th>
                            
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM courses;";
                    $result = mysqli_query($db, $sql);
                    $resultCheck = mysqli_num_rows($result);
                
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['CourseID']; ?></td>
                                    <td><?php echo $row['CourseCode']; ?></td>
                                    <td><?php echo $row['CourseDescription']; ?></td>
                                    <!-- Courses Delete -->
                                    <td>
                                        <a href="tables.php?edit3=<?php echo             $row['CourseID']; ?>" class ="btn btn-primary">Edit</a>
                                    </td>
                                    <td>
                                        <a href="process.php?delete3=<?php echo              $row['CourseID']; ?>" class = "btn               btn-danger">Delete</a>
                                    </td>
                                   
                                    
                                    
                                    
                                </tr>
                                <?php
                                }
                    }
                                
                ?>
                  </tbody>
                </table>
                  <!-- ADD FORM HERE-->
                  <!-- insert -->
                  <br>
                  <form action = "process.php" method ="POST">
                      <input type="hidden" name ="CourseID" value="<?php echo $CourseID; ?>">
                      <div class="form-row justify-content-center">
                          <div class="col">
                                <input class="form-control" type ="text" name ="CourseCode" value="<?php echo $CourseCode; ?>" placeholder="Course code..."> 
                              </div>
                          <div class="col">
                                <input class="form-control" type ="text" name ="CourseDescription" value="<?php echo $CourseDescription; ?>"  placeholder="Course Description...">
                          </div>
                          
                          <div class="col">
                              <!-- UPDATE -->
                                <?php
                                if($update3==true):
                                    
                                ?>
                                <a><button class="btn btn-primary btn-block" type="submit" name="update3">Update</button> </a>
                                <?php 
                                else:
                                ?>
                                <a><button class="btn btn-info btn-block" type="submit" name="save3">Save</button> </a>
                              <?php endif; ?>
                            </div>
                                
                            </div>
                        </form>
              </div>
            </div>
          </div>
            
        

        </div>
        <!-- /.container-fluid -->
          
        <!-- Begin Page Content -->
        <div class="container-fluid">


          

          <!-- Courses Taught table -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Courses Taught</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                                <th> Code </th>
                                <th> TutorID </th>
                                <th> Action </th>
                                
                                
                                
                                
                            
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                                <th> Code </th>
                                <th> TutorID </th>
                                <th> Action </th>
                                   
                            
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php
                    $sql = "SELECT * FROM coursestaught;";
                    $result = mysqli_query($db, $sql);
                    $resultCheck = mysqli_num_rows($result);
                
                    if ($resultCheck > 0){
                        while ($row = mysqli_fetch_assoc($result)){
                            ?>
                                <tr>
                                    <td><?php echo $row['CourseCode']; ?></td>
                                    <td><?php echo $row['TutID']; ?></td> 
                                    <!-- Courses taught Delete -->
                                    <td><a href="process.php?delete4=<?php echo $row['TutID']; ?>" class = "btn btn-danger">Delete</a></td>
                                </tr>
                                
                                <?php
                                }
                    }
                                
                ?>
                  </tbody>
                </table>
                  <!-- ADD FORM HERE-->
              </div>
            </div>
          </div>
            
        

        </div>
        <!-- /.container-fluid -->
        

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Edify 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>

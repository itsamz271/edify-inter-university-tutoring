<?php

//SESSION
session_start();

$servername="localhost";
$databasename="edifydb";
$username="root"; // this is for the admin of the database. it is the main admin.
$password=""; // this is also for the admin of the database, and we can set this password in the server when We create new admin from the user account button.

// Create Connection

$db = mysqli_connect($servername,$username,$password,$databasename);
//servername, username, password, dbname


if (!$db) {
      die("I cannot Connect: " . mysqli_connect_error());
}
    
    //UPDATE BUTTON
    $update = false;
   
    $update3 = false;
    
    
    $TuteeID = 0;
    $TuteeFirstName = '';
    $TuteeLastName = '';                  
    $TuteeEmail = '';
    $TuteePassword = '';
    $TuteePhoneNumber = '';
    $TuteeDateOfBirth = '';
    $TimeZone = '';
    $TuteeGender = '';
    
    $CourseID = 0;
    $CourseCode = '';
    $CourseDescription = '';

    //UPDATE BUTTON for tutor
    $update1 = false;

     $TutorID = 0;
     $TutorFirstNmae = '';
     $TutorLastName = ''; 
     $TutorEmail = '';
     $TutorPassword = '';
     $TutorPhoneNumber = '';
     $TutorDateOfBirth = '';
     $TutorDegree = '';
     $TutorProfession = '';
     $Timezone = '';
     $TutorGender = '';
     $TutorQ1 = '';
     $TutorQ2 = '';
     $TutorQ3 = '';
     $TutorQ4 = '';
     $Course1 = '';
     $Course2 = '';
     $Course3 = '';
    

    

// CREATE SECTION

if (isset($_POST['save'])){
    
    $TuteeFirstName = $_POST['TuteeFirstName'];
    $TuteeLastName = $_POST['TuteeLastName'];                  
    $TuteeEmail = $_POST['TuteeEmail'];
    $TuteePassword = $_POST['TuteePassword'];
    $TuteePhoneNumber = $_POST['TuteePhoneNumber'];
    $TuteeDateOfBirth = $_POST['TuteeDateOfBirth'];
    $TimeZone = $_POST['TimeZone'];
    $TuteeGender = $_POST['TuteeGender'];
    
    $db->query("INSERT INTO tutee (TuteeFirstName,TuteeLastName,TuteeEmail,TuteePassword,TuteePhoneNumber,TuteeDateOfBirth,TimeZone,TuteeGender) VALUES ('$TuteeFirstName','$TuteeLastName','$TuteeEmail',md5('$TuteePassword'),'$TuteePhoneNumber','$TuteeDateOfBirth','$TimeZone','$TuteeGender')");   
}

//CREATE SAVE1
//CREATE SAVE2
//CREATE SAVE3
//CREATE SAVE4

// DELETE SECTION
if (isset($_GET['delete'])){
    $TuteeID = $_GET['delete'];
    $db->query("DELETE FROM tutee WHERE TuteeID=$TuteeID");
}

if (isset($_GET['delete1'])){
    $TutorID = $_GET['delete1'];
    $db->query("DELETE FROM tutor WHERE TutorID=$TutorID");
}

if (isset($_GET['delete2'])){
    $SessionID = $_GET['delete2'];
    $db->query("DELETE FROM session WHERE SessionID=$SessionID");
}

if (isset($_GET['delete3'])){
    $CourseID = $_GET['delete3'];
    $db->query("DELETE FROM courses WHERE CourseID=$CourseID");
}

if (isset($_GET['delete4'])){
    $TutID = $_GET['delete4'];
    $db->query("DELETE FROM coursestaught WHERE TutID=$TutID");
}

//-- EDIT AND UPDATE SECTION FOR TUTEE

if (isset($_GET['edit'])){
    $TuteeID = $_GET['edit'];
    $result = $db->query("SELECT * FROM tutee WHERE TuteeID =$TuteeID");
    //update button
    $update = true;
    if($result->num_rows){
        $row = $result->fetch_array();
        $TuteeFirstName = $row['TuteeFirstName'];
        $TuteeLastName = $row['TuteeLastName'];                  
        $TuteeEmail = $row['TuteeEmail'];
        $TuteePassword = $row['TuteePassword'];
        $TuteePhoneNumber = $row['TuteePhoneNumber'];
        $TuteeDateOfBirth = $row['TuteeDateOfBirth'];
        $TimeZone = $row['TimeZone'];
        $TuteeGender = $row['TuteeGender'];
        
    }
    
}

if (isset($_POST['update'])){
    $TuteeID = $_POST['TuteeID'];
    $TuteeFirstName = $_POST['TuteeFirstName'];
    $TuteeLastName = $_POST['TuteeLastName'];                  
    $TuteeEmail = $_POST['TuteeEmail'];
    $TuteePassword = $_POST['TuteePassword'];
    $TuteePhoneNumber = $_POST['TuteePhoneNumber'];
    $TuteeDateOfBirth = $_POST['TuteeDateOfBirth'];
    $TimeZone = $_POST['TimeZone'];
    $TuteeGender = $_POST['TuteeGender'];
    
    $db->query("UPDATE tutee SET TuteeFirstName='$TuteeFirstName', TuteeLastName='$TuteeLastName', TuteeEmail='$TuteeEmail', TuteePassword='$TuteePassword', TuteePhoneNumber='$TuteePhoneNumber',TuteeDateOfBirth ='$TuteeDateOfBirth', TimeZone ='$TimeZone', TuteeGender='$TuteeGender' WHERE TuteeID=$TuteeID");
    
    $_SESSION['message']="Record Updated";
    header('location: tables.php');
}

//UPDATE AND EDIT AND SAVE FOR TUTOR

if (isset($_POST['save1'])){
    
   
     $TutorFirstNmae = $_POST['TutorFirstNmae'];
     $TutorLastName = $_POST['TutorLastName']; 
     $TutorEmail = $_POST['TutorEmail'];
     $TutorPassword = $_POST['TutorPassword'];
     $TutorPhoneNumber = $_POST['TutorPhoneNumber'];
     $TutorDateOfBirth = $_POST['TutorDateOfBirth'];
     $TutorDegree = $_POST['TutorDegree'];
     $TutorProfession = $_POST['TutorProfession'];
     $Timezone = $_POST['Timezone'];
     $TutorGender = $_POST['TutorGender'];
     $TutorQ1 = $_POST['TutorQ1'];
     $TutorQ2 = $_POST['TutorQ2'];
     $TutorQ3 = $_POST['TutorQ3'];
     $TutorQ4 = $_POST['TutorQ4'];
     $Course1 = $_POST['Course1'];
     $Course2 = $_POST['Course2'];
     $Course3 = $_POST['Course3'];             
    
    
    $db->query("INSERT INTO tutor (TutorFirstNmae,TutorLastName,TutorEmail,TutorPassword,TutorPhoneNumber,TutorDateOfBirth,TutorDegree,TutorProfession,Timezone,TutorGender,TutorQ1,TutorQ2,TutorQ3,TutorQ4,Course1,Course2,Course3) VALUES ('$TutorFirstNmae', '$TutorLastName','$TutorEmail',md5('$TutorPassword'),'$TutorPhoneNumber','$TutorDateOfBirth','$TutorDegree','$TutorProfession','$Timezone','$TutorGender','$TutorQ1','$TutorQ2','$TutorQ3','$Course1','$Course2','$Course3')");   
}

if (isset($_GET['edit1'])){
    $CourseID = $_GET['edit3'];
    $result = $db->query("SELECT * FROM courses WHERE CourseID =$CourseID");
    //update button
    $update3 = true;
    if($result->num_rows){
        $row = $result->fetch_array();
        $CourseCode = $row['CourseCode'];
        $CourseDescription = $row['CourseDescription'];                  
             
    }
    
}

if (isset($_POST['update1'])){
    $CourseID = $_POST['CourseID'];
    $CourseCode = $_POST['CourseCode'];
    $CourseDescription= $_POST['CourseDescription'];                  
    
    
    $db->query("UPDATE courses SET CourseCode='$CourseCode', CourseDescription='$CourseDescription'  WHERE CourseID=$CourseID");
    
    $_SESSION['message']="Record Updated";
    header('location: tables.php');
}




//UPDATE AND EDIT AND SAVE FOR COURSES

if (isset($_POST['save3'])){
    
    $CourseCode= $_POST['CourseCode'];
    $CourseDescription = $_POST['CourseDescription'];                  
    
    
    $db->query("INSERT INTO courses (CourseCode,CourseDescription) VALUES ('$CourseCode', '$CourseDescription')");   
}

if (isset($_GET['edit3'])){
    $CourseID = $_GET['edit3'];
    $result = $db->query("SELECT * FROM courses WHERE CourseID =$CourseID");
    //update button
    $update3 = true;
    if($result->num_rows){
        $row = $result->fetch_array();
        $CourseCode = $row['CourseCode'];
        $CourseDescription = $row['CourseDescription'];                  
             
    }
    
}

if (isset($_POST['update3'])){
    $CourseID = $_POST['CourseID'];
    $CourseCode = $_POST['CourseCode'];
    $CourseDescription= $_POST['CourseDescription'];                  
    
    
    $db->query("UPDATE courses SET CourseCode='$CourseCode', CourseDescription='$CourseDescription'  WHERE CourseID=$CourseID");
    
    $_SESSION['message']="Record Updated";
    header('location: tables.php');
}





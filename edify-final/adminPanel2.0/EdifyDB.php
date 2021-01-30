<?php
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
//echo "Wow ! Connected successfully"; // echo means, print an output to the display (screen).
?>
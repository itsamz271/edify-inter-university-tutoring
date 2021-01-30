<?php
include 'db.php';
$id = $_GET['id']; // get is super global
echo $id;


$sql = "delete from task where id='$id'";
$val = $db -> query($sql);
if($val){
	echo " i deleted id no '$id'";
	echo "<h1> Record deleted successfuly </h1>" ;
	header('location: index.php');
	die();
}


?>
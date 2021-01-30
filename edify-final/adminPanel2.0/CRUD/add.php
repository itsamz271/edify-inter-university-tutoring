<?php
// first of all add the db
 include 'db.php';  
if(isset($_POST['send'])){
	
	$gname = $_POST['taskindex'];
	//$name = $_POST['taskindex'];
	
	// check filter
	$name = strip_tags($gname);
	echo $name;
	$sql = "insert into task (name) values ('$name')";
	$val = $db -> query($sql);

	if($val){
		echo "<h1> Record inserted successfuly </h1>" ;
	//	header('location: index.php');
	//	die();
	}
}
?>
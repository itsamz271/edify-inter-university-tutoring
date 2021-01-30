<?php

$db = new Mysqli; // mySQl object created

$db->connect('localhost','root','','testv3'); // a function inside mysqli class
// four paramters server address (2) user name (3) password that is empty in my case (4) the data base name that is crud in this case

if($db){
	echo "success";
}

?>
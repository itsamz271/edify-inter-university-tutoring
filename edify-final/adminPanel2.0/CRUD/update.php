<!DOCTYPE html>
<?php include 'db.php'; 
$id=$_GET['id'];
$sql ="select * from task where id='$id'";
echo "     The id is '$id'";
echo '<br>';
//write the query
$rows = $db->query($sql); // stire the records and 

$row = $rows->fetch_assoc();

var_dump($row);

if(isset($_POST['send'])){
	$task = htmlspecialchars($_POST['taskindex']);
	$sql2updated ="update task set name='$task' where id ='$id'";
	$var = $db->query($sql2updated);
	
}
?>
<html>
	<head>
		<title>	my First PhP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body>
		<!-- https://getbootstrap.com/docs/4.0/content/tables/ -->
		<!-- Task 4 Search BootStrap modal and get w3 school modal
		https://www.w3schools.com/bootstrap/bootstrap_modal.asp
		and paste the code after print button
		-->
		<div class="container">
			
			<div class="row" style="margin-top: 70px;">
				<center><h1> To Do List </h1></center>
				<div class="col-md-10 col-md-offset-1" > <!-- Task 2 -->
					<table class="table">
						<!-- For Task 4 : data tagget will be equal to id and data toggle will be class but this is based on jquery and will not work without it-->
						

							<!-- Modal for button pop up copied from w3 Schools Starts Here-->
						
							       <form method="post" >
								       	<div class="form-group">
								       		<label> Task Name</label>
								       		<input type="text" value="<?php echo $row['name']; ?>" required name="taskindex" class="form-control"> <!-- Task 5: required for mandataory field-->
								       	</div>
									<input type="submit" name="send" value="Add" class="btn btn-success">
							       </form>
										<!-- Task 5: Add form here ends -->

							      </div>
							     


						<hr><br>
						
					<div>
					</div>
				</div>
			</body>
		</html>
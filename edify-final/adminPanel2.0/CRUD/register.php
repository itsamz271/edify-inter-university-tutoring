<html>
<head>
    <title>	my First PhP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>
   <div class="container">
			
			<div class="row" style="margin-top: 70px;">
				<center><h1> Regsitration </h1></center>
				<div class="col-md-10 col-md-offset-1" > <!-- Task 2 --> 
    <?php
    include("db.php");
 
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $category = $_POST['category'];
 
        
        if($user == "" || $pass == "" || $name == "" || $email == "") {
            echo "All fields should be filled. One or many fields are empty.";
            echo "<br/>";
            echo "<a href='register.php'>Register More Users</a>";
        } else {
			$sql = "INSERT INTO login(name, email, username, password , category) VALUES('$name', '$email', '$user', md5('$pass') , '$category')";
			$val = $db -> query($sql);
            if(!$val){
            die("Could not execute the insert query.");
            }
            echo "Registration successfully";
            echo "<br/>";
            echo "<meta http-equiv='refresh' content='2; url=index.php' />";
        }
    } else {
?>


					<div class="form-group row">


							
							<form name="form1" method="post" class="form-horizontal" action="">

						<div class="form-group">
							<label for="colFormLabel" class="col-sm-2 col-form-label">Full Name</label>
							<input type="text" name="name"></td>
						</div>
						<div class="form-group">
							<label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
							<input type="text" name="email">
						</div>
						<div class="form-group">
							<label for="colFormLabel" class="col-sm-2 col-form-label">Username</label>
							<input type="text" name="username">
						</div>
						<div class="form-group">
							<label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
							<input type="password" name="password">
						</div>
						<div class="form-group">
							<label for="colFormLabel" class="col-sm-2 col-form-label">Category</label>
							<input type="text" name="category" >
						</div>
						<div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="submit" value="Submit">
							
						<button  onclick="window.location.href='index.php'" >Cancel</button>
						</div>
						</div>
						<br>
						
					</div>
							</form>
    <?php
    }
    ?>
	<div class="col-md-12 text-center">
			<p>Search</p>
			<form action="search.php" method="post" class="form-group">
				
				<input type="text" placeholder="please add your Search here"
				 name="searchTask" class="form-control">
			</form>
		</div>
	</div>
	</div>
	</div>
</body>
</html>
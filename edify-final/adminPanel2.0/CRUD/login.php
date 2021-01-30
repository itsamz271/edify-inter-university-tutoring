
<html>
<head>
<title>	my First PhP</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
 
<body>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="task2.png" alt="Add User">
	   <div class="carousel-caption">
	  <h3>First </h3>
        <p>Add the button user</p>
    </div>
	</div>

    <div class="item">
      <img src="task3.png" alt="Add HTML">
    </div>

    <div class="item">
      <img src="task5.png" alt="Add PHP">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 <br />
<?php
//When the login is successful, I have set three SESSION variables. You can see it in below login.php code.

//SESSION[‘valid’] = This variable contains user’s username
//SESSION[‘name’] = This variable contains user’s full name
//SESSION[‘id’] = This variable contains user’s id
include("db.php");
 
if(isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($db, $_POST['username']);
    $pass = mysqli_real_escape_string($db, $_POST['password']);

 
    if($user == "" || $pass == "") {
        echo "Either username or password field is empty.";
		echo $user;
		echo $pass;
		echo md5('$pass');
        echo "<br/>";
        echo "<a href='login.php'>Go back</a>";
    } else {
		// $result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
       
        $result = mysqli_query($db, "SELECT * FROM login WHERE username='$user' AND password='$pass'")
        or die("Could not execute the selected query.");
        
        $row = mysqli_fetch_assoc($result);
        
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
			$_SESSION['category'] = $row['category'];
        } else {
            echo "<div class='main'> Invalid username or password. </div>";
            echo "<br/>";
            echo " <div class='main'> <a href='index.php'>Go back</a> </div>";
        }
 
        if(isset($_SESSION['valid'])) {
            header('Location: index.php');            
        }
        
    }
} else {
?>
<div class="form-group row">
							
							<form name="form1" method="post" class="form-horizontal" action="">
	<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input id="username" type="text" class="form-control" name="username" placeholder="User Name">
  </div>
  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
    <input id="password" type="password" class="form-control" name="password" placeholder="Password">
  </div>
		<div class="col-sm-offset-2 col-sm-10">
		<input type="submit" name="submit" value="Submit">
		<button  onclick="window.location.href='index.php'" >Cancel</button>
		</div>
  </form>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    </div>
    
<?php
}
?>
</body>
</html>
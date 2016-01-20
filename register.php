<!DOCTYPE html>
<html>

  <head>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    
    <style type="text/css">
<!--
.textbox {
width:100px;
height:18px;
}

.nav-login {
color: #5a5a5a;
font-size: 11px;
font-weight: bold;
padding: 14px 10px;
text-transform: uppercase;
}
-->

.button {
border: 1px solid #006;
background: #E0E0E0;
margin: 1px 1px 1px 1px;
font-size: 11px;
font-weight: bold;
}
</style>
    
  </head>

  <body>
  <div align="center">
		<?php 	require_once 'connect.php';
				if (isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password' and active=1";
				$result = mysql_query($sql) or die(mysql_error());
				$count = mysql_num_rows($result);
				if ($count == 1){
					echo "You are logged in";
				} 
				else {
					echo "Login Failed";
				}
				} ?>
	</div>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="http://localhost:8888/PowerliftingHub/index.php">Home</a></li>
          <li><a href="http://localhost:8888/PowerliftingHub/browse.php">Browse</a></li>
        </ul>
        <ul class="pull-right">
          <form action="" method="POST">
          <li><span class="nav-login">Username: <input type="text" class="textbox" id="username" name="username" placeholder="username"/></span>
          <li><span class="nav-login">Password: <input type="password" class="textbox" id="password" name="password" placeholder="password"/></span>
          <li><input type="submit" name="submit" class="button" value="Login" />
          <li><a href="http://localhost:8888/PowerliftingHub/register.php" size="8px">Sign Up</a></li>
          </form>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Powerlifting Hub</h1>
        <p>Built by powerlifters, for powerlifters.</p>
        <a href="#">Who are we?</a>
      </div>
    </div> 

<?php	require('connect.php');
		// If the values are posted, insert them into the database.
		
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		
		if ($cpassword != $password){
			echo "<b>ERROR:</b> Passwords do not match</br>";
			echo "Please follow this link to return to registration: "."<a href=\"http://localhost:8888/PowerliftingHub/register.php\">Registration</a>";
			exit;
		}
		
		if ((strlen($password) < 8) && (strlen($password) > 15)){
			echo "<b>ERROR:</b> Password must be at least 8 characters";
			echo "Please follow this link to return to registration: "."<a href=\"http://localhost:8888/PowerliftingHub/register.php\">Registration</a>";
			exit;
		}
		
		if (isset($_POST['submit'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$sex = $_POST['sex'];
			$sql = "SELECT * FROM `user` WHERE username='$username'";
				$result = mysql_query($sql) or die(mysql_error());
				$count = mysql_num_rows($result);
				if ($count > 0){
					echo "Username already exists!";
				} 
			$query = "INSERT INTO `user` (username, password, email, sex) VALUES ('$username', '$password', '$email', '$sex')";
			$result = mysql_query($query);
		if($result){
			$msg = "Thanks for joining!";
			echo $msg;
		}
		}
?>

  	<div class="register-form" align="center">
		<h1>Register</h1>
			<form action="" method="POST">
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;User Name : </label>
					<input name="username" type="text" id="username" maxlength="15" placeholder="username" /></p>
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : </label>
					<input id="email" type="email" name="email" placeholder="email"/></p>
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password : </label>
					<input id="password" type="password" name="password" placeholder="password" /> (8 - 15 characters)</p>
				<p><label>&nbsp;Confirm Password : </label>
					<input id="cpassword" type="password" name="cpassword" placeholder="confirm" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>	
				<p><label>Sex : </label>
					<input id="sex" type="radio" name="sex" /> Male
					<input id="sex" type="radio" name="sex" /> Female
					<input id="sex" type="radio" name="sex" /> None of your business</p>
				<p><label>	
						<a class="btn" href="login.php">Login</a>
					<input class="btn register" type="submit" name="submit" value="Register" />
			</form>
	</div>

<div class="learn-more">
	  <div class="container">
		<div class="row">
	      <div class="col-md-4">
			<h3>Wilks Calculator</h3>
			<p>Want to keep track of your Wilks strength? Our calculator will store your 
			past Wilks values and display your progress over time.</p>
			<p><a href="#">Find you Wilks value.</a></p>
	      </div>
		  <div class="col-md-4">
			<h3>Leaderboards</h3>
			<p>See how your numbers stack up against other members. Sort by weight class 
			and Wilks values to get a more accurate portrayal of your performance.</p>
			<p><a href="#">The leaderboards.</a></p>
		  </div>
		  <div class="col-md-4">
			<h3>Programming Spreadsheets</h3>
			<p>Choose from your favorite training programs. StrongLifts, Sheiko, Candito, 
			Madcow.  We'll compile as many as we can and allow you to input your stats 
			directly into the webpage. No more copying your programs over from Excel to a 
			fitness app on your phone.  Just visit our page on any device and your program 
			will be stored.</p>
			<p><a href="#">View training regimens.</a></p>
		  </div>
	    </div>
	  </div>
	</div>
  </body>
</html>
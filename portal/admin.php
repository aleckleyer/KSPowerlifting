<?php
session_start();
include '../connect.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../main.css">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<div class="background-portal"></div>
  	<div class="container" id="loginPortalContainer">
    <div class="col-md-4 col-md-offset-4" id="loginPortal">
    <?php
    	if(isset($_SESSION['valid_user'])&&($_SESSION['valid_user_priv'])==1){
    		echo "<p class='text-center' style='color:white'>".$_SESSION['valid_user']." you are already logged in!</p>";
    		echo "<div class='col-md-12' style='margin-top:20px'>
						<div class='col-md-6'>
							<button class='btn btn-default'>
								<a href='addEntry.php'>Add a meet!</a>
							</button>
						</div>
                        <div class='col-md-6'>
							<button class='btn btn-default'>
								<a href='logout.php'>Log Out</a>
							</button>
						</div>
					</div>";
		} else if(isset($_SESSION['valid_user'])&&($_SESSION['valid_user_priv'])==0) {
            echo "<p class='lead' style='color:white'>You do not have administrator rights</p>";
            echo "<div class='col-md-6'>
							<button class='btn btn-default'>
								<a href='logout.php'>Log Out</a>
							</button>
						</div>";
        } else {
    ?>
    <h1>Please log in</h1>
    <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars('login.php') ?>">
    	<div class="form-group">
    		<input type="text" placeholder="Username" class="form-control" name="username" id="username"/>
    	</div>
    	<div class="form-group">
    		<input type="password" placeholder="Password" class="form-control" name="password" id="password"/>
    	</div>
    	<div class="form-group text-center">
    		<button type="submit" value="submit" id="submit" class="btn btn-default" name="submit">Submit</button>
    	</div>
    </form>
    <?php
        
        }
        
    ?>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
<!DOCTYPE html>

<head>
    <title>
        KSPowerlifting - Home
    </title>
    <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="squat.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="main.css">

    

</head>

<body>
  <div class="background"></div>


  <?php include 'nav.html'; ?>



<div class="container">
        <div class="row">
                
            <?php include 'leftpanel.html'; ?>
            
                <div class="col-md-offset-1 col-md-6 mainPanel">
                    <div class="text-center">
                    <h1>Welcome to KSPowerlifting!</h1>
                    </div>
                    <p>Our page is currently under construction. We are working to become the most user-friendly and informative powerlifting database. We aim to provide useful tools and links to external resources in order to host anything you'll ever need.</p>
                    <p>Since we are still in the process of building the database, it would be highly valuable to us if you could leave a suggestion for the website. Anything from a link we should include to a feature we should provide, or even a formatting issue we should fix! We are open to anything.</p>
                    <form method="post" action="suggestion.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" required />
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="suggestion" placeholder="Leave your suggestion here!" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" value="Submit" class="btn btn-success" />
                        </div>
                    </form>
                    <div>
                        <?php if(isset($_POST['submit'])){
    ?>
                                <div class="alert alert-success" role="alert">
                                    <strong>Thanks!</strong> We will take this into account.
                                </div>
    <?php                       } ?>
                    </div>
                </div>

            <?php include 'rightpanel.html'; ?>
                
            </div>
        </div>

     <?php include 'footer.html'; ?>



    <script src="wilks.js"></script>

</body>

</html>
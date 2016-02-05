<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  </head>
  <body> 

      <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p class="lead">What would you like to add: <a href="#" id="showMeet">Meet</a> | <a href="#" id="showCoach">Powerlifting Coach</a> or <a href="logout.php">Logout?</a></p>
                <form class="form-horizontal" method="post" id="meetForm" style="display:none" action="<?php echo htmlspecialchars('addMeet.php') ?>">
                        <div class="form-group">
                            <label>Meet Name:</label>
                            <input type="text" placeholder="Raw Unity Meet IX" class="form-control" name="meetName" id="meetName" required/>
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                            <input type="date" placeholder="YYYY/MM/DD" class="form-control" name="date" id="date" required/>
                        </div>
                        <div class="form-group">
                            <label>Federation:</label>
                            <input type="text" placeholder="RUPC" class="form-control" name="federation" id="federation" required/>
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <input type="text" placeholder="Port Saint Lucie" class="form-control" name="city" id="city" required/>
                        </div>
                        <div class="form-group">
                            <label>State:</label>
                            <input type="text" placeholder="FL" class="form-control" name="state" id="state" required/>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" value="submit" id="submit" class="btn btn-default" name="submit">Submit</button>
                        </div>
                </form>
                <form class="form-horizontal" method="post" id="coachForm" style="display:none" action="<?php echo htmlspecialchars('addCoach.php') ?>">
                        <div class="form-group">
                            <label>First Name:</label>
                            <input type="text" placeholder="Pete" class="form-control" name="firstName" id="firstName" required/>
                        </div>
                        <div class="form-group">
                            <label>Last Name:</label>
                            <input type="text" placeholder="Rubish" class="form-control" name="lastName" id="lastName" required/>
                        </div>
                        <div class="form-group">
                            <label>URL/Link: (include 'mailto:' for emails)</label>
                            <input type="text" placeholder="mailto:prstrength1@gmail.com" class="form-control" name="url" id="url" required/>
                        </div>
                        <div class="form-group">
                            <label>Weight Class: (In KGs, only put numeric value)</label>
                            <input type="text" placeholder="120" class="form-control" name="wclass" id="wclass" />
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" value="submit" id="submit" class="btn btn-default" name="submit">Submit</button>
                        </div>
                </form>
            </div>
            <div class="col-md-8">
          <?php
          
                include 'showMeets.php';
                include 'showCoaches.php';
                
          ?>
                <hr>
            </div>
          </div>
      </div>
      
      <script type="text/javascript">
        
          $(document).ready(function(){ 
              
            $meetDisplay = $("#meetForm").css('display');
            $coachDisplay = $("#coachForm").css('display');

            $("#showMeet").click(function(){
                if($meetDisplay == 'none'){
                    changeMeetShow();
                    changeCoachHide();
                } else if ($meetDisplay == 'block'){
                    changeMeetHide();
                }
            });
              
            $("#showCoach").click(function(){
                if($coachDisplay == 'none'){
                    changeCoachShow();
                   changeMeetHide();
                } else if ($coachDisplay == 'block'){
                    changeCoachHide();
                }
            });
              
            function changeMeetShow(){
                $("#meetForm").css('display','block');
                $meetDisplay = 'block';
            }
            function changeMeetHide(){
                $("#meetForm").css('display','none');
                $meetDisplay = 'none';
            }
            
            function changeCoachShow(){
                $("#coachForm").css('display','block');
                $coachDisplay = 'block';
            }
            function changeCoachHide(){
                $("#coachForm").css('display','none');
                $coachDisplay = 'none';
            }
        });
      </script>

    <!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
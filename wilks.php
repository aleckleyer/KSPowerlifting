<!DOCTYPE html>

<head>
    <title>
        KSPowerlifting - Wilks Calculator
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
            <div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h1>Wilks Calculator</h1>
                            <hr>
                            <p class="lead">Just want your Wilks? Fill this quick form out!</p>
                        </div>
                    </div>
                        <form class="form-horizontal">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="bodyweight">Bodyweight</label>  
                                <div class="col-md-4">
                                    <input id="bodyweight" name="bodyweight" type="text" placeholder="150" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="liftedweight">Lifted weight</label>  
                                <div class="col-md-4">
                                    <input id="liftedweight" name="liftedweight" type="text" placeholder="500" class="form-control input-md">
                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="gender">Gender</label>
                                <div class="col-md-4"> 
                                    <label class="radio-inline" for="gender-0">
                                        <input type="radio" name="gender" id="gender-0" value="1" checked="checked">
                                        Male
                                    </label> 
                                    <label class="radio-inline" for="gender-1">
                                        <input type="radio" name="gender" id="gender-1" value="2">
                                        Female
                                    </label>
                                </div>
                            </div>

                            <!-- Multiple Radios (inline) -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="unit">Unit</label>
                                <div class="col-md-4"> 
                                    <label class="radio-inline" for="unit-0">
                                        <input type="radio" name="unit" id="unit-0" value="1" checked="checked">
                                        lbs
                                    </label> 
                                    <label class="radio-inline" for="unit-1">
                                        <input type="radio" name="unit" id="unit-1" value="2">
                                        kgs
                                    </label>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="submit"></label>
                                <div class="col-md-4 text-center">
                                    <button type="submit" id="findValue" class="btn btn-primary">Submit</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" for="result">Wilks Value</label>  
                                <div class="col-md-4">
                                    <p class="form-control-static bold"><span id="result" style="font-size: 1.5em"></span></p>
                                </div>
                            </div>
                                
<hr>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <p class="lead">Would you like to know what lifts you'll probably have to hit based on what your goal wilks is? Find out below!</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-center">Current Lifts</h3>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-4">Squat</label>
                                    <div class="col-md-4">
                                        <input type="text" id="currentSquat" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Bench</label>
                                    <div class="col-md-4">
                                        <input type="text" id="currentBench" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Deadlift</label>
                                    <div class="col-md-4">
                                        <input type="text" id="currentDead" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Total</label>
                                    <div class="col-md-4">
                                        <span id="currentTotal"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Wilks</label>
                                    <div class="col-md-4">
                                        <span id="currentWilks"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Goal Wilks</label>
                                    <div class="col-md-4">
                                        <input type="text" id="goalWilks" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3 class="text-center">Goal Lifts (LB/KG)</h3>
                                <hr>
                                <div class="form-group">
                                    <label class="col-md-4">Squat</label>
                                    <div class="col-md-4">
                                        <span id="goalSquat"></span><span id="goalSquatKG"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Bench</label>
                                    <div class="col-md-4">
                                        <span id="goalBench"></span><span id="goalBenchKG"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Deadlift</label>
                                    <div class="col-md-4">
                                        <span id="goalDead"></span><span id="goalDeadKG"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4">Total</label>
                                    <div class="col-md-4">
                                        <span id="goalTotal"></span><span id="goalTotalKG"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12 text-center">
                                    <button type="button" class="btn btn-primary" id="submitGoal">Submit</button>
                                </div>
                            </div>
                            <hr>
                        </form> 
                    </div>
                </div> 


                <?php include 'rightpanel.html'; ?>
            </div>
        </div>

    <?php include 'footer.html'; ?>



    <script src="wilks.js"></script>

</body>

</html>
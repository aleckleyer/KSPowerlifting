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



  <?php include 'nav.html'; ?>




<div class="container-fluid">
    <div class="row">
        
       <?php include 'leftpanel.html'; ?>
        
        <div class="col col-sm-8">
            <div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <h1>Wilks Calculator</h1>
                                    <p class="lead">Find your Wilks value to determine your strength relative to your bodyweight.</p>
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
                                <div class="col-md-4">
                                    <button type="submit" id="findValue" class="btn btn-primary">Submit</button>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label" for="result">Wilks Value</label>  
                                <div class="col-md-4">
                                    <p class="form-control-static bold"><span id="result" style="font-size: 1.5em"></span></p>
                                </div>
                            </div>

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
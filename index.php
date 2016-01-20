<!DOCTYPE html>

<head>
    <title>
        Wilks Calculator
    </title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../main.css">

    

</head>

<body>



  <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a class="navbar-brand" href="#">PLH</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Wilks Calculator</a></li>
                            <li><a href="#">Program Tracker</a></li>
                            <li><a href="#">Find Your Macros</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
          
                <ul class="nav navbar-nav navbar-right">
                    <form action="" method="POST">
                        <li><span class="nav-login">Username: <input type="text" class="textbox" id="username" name="username" placeholder="username"/></span>
                        <li><span class="nav-login">Password: <input type="password" class="textbox" id="password" name="password" placeholder="password"/></span>
                        <li><input type="submit" name="submit" class="button" value="Login" />
                        <li><a href="http://localhost:8888/PowerliftingHub/register.php" size="8px">Sign Up</a></li>
                    </form>
                </ul>
            </div>
        </div>
  </nav>



<div class="container-fluid">
        <div class="row">
                <div class="col col-sm-2">
                    <div id="sidebar">
                        <ul class="nav nav-stacked">
                            <li><h3 class="highlight">Federations <i class="pull-right"></i></h3></li>
                            <li><a href="federations/aau" title="">Amateur Athletic Union Powerlifting (AAU)</a></li>
                            <li><a href="federations/apf" title="">American Powerlifting Federation (APF)</a></li>
                            <li><a href="federations/cpu" title="">Canadian Powerlifting Union (CPU)</a></li>
                            <li><a href="federations/ipf" title="">International Powerlifting Federation (IPF)</a></li>
                            <li><a href="federations/uspf" title="">United States Powerlifting Federation (USPF)</a></li>
                            <li><a href="federations/usapl" title="">USA Powerlifting (USAPL)</a></li>
                            <li><a href="federations/wabdl" title="">World Association of Benchers &amp; Deadlifters (WABDL)</a></li>
                            <li><a href="federations/wnpf" title="">World Natural Powerlifting Federation (WNPF)</a></li>
                        </ul>
                    </div>
                    <div id="sidebar">
                        <ul class="nav nav-stacked">
                            <li><h3 class="highlight">Powerlifting Forums <i class="pull-right"></i></h3></li>
                            <li><a href="http://badattitudegym.com/smf/index.php" title="Bad Attitude Gym">Bad Attitude Gym</a></li>
                            <li><a href="http://asp.elitefts.com/qa/" title="EliteFTS">EliteFTS</a></li>
                            <li><a href="http://www.fortified-iron.com/forum/index.php?showforum=8" title="Fortified Iron">Fortified Iron</a></li>
                            <li><a href="http://goheavy.com/forums/" title="Go Heavy">Go Heavy</a></li>
                            <li><a href="http://www.outlawpowerlifting.com/" title="Outlaws">Outlaws</a></li>
                            <li><a href="http://www.powerliftinguk.com/index.php" title="PowerliftingUK">PowerliftingUK</a></li>
                            <li><a href="http://www.wannabebigforums.com/forumdisplay.php?f=48" title="Wanna Be Big">Wanna Be Big</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col col-sm-8">
                    <div class="panel">

                        <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <div class="row">
                                <div class="col col-sm-6 text-center">
                                    <h1><a href="#" title="scroll down for your viewing pleasure">Wilks Calculator</a>
                                    <p class="lead">Find your Wilks value to determine your strength relative to your bodyweight.</p>
                                    </h1>
                                </div>
                            </div>
                        
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

                        </fieldset>
                        </form> 
                    </div>
                </div> 


                <div class="col col-sm-2">
                    <div id="sidebar">
                        <ul class="nav nav-stacked">
                            <li><h3 class="highlight">Federations <i class="pull-right"></i></h3></li>
                            <li><a href="federations/aau" title="">Amateur Athletic Union Powerlifting (AAU)</a></li>
                            <li><a href="federations/apf" title="">American Powerlifting Federation (APF)</a></li>
                            <li><a href="federations/cpu" title="">Canadian Powerlifting Union (CPU)</a></li>
                            <li><a href="federations/ipf" title="">International Powerlifting Federation (IPF)</a></li>
                            <li><a href="federations/uspf" title="">United States Powerlifting Federation (USPF)</a></li>
                            <li><a href="federations/usapl" title="">USA Powerlifting (USAPL)</a></li>
                            <li><a href="federations/wabdl" title="">World Association of Benchers &amp; Deadlifters (WABDL)</a></li>
                            <li><a href="federations/wnpf" title="">World Natural Powerlifting Federation (WNPF)</a></li>
                        </ul>
                    </div>
                    <div id="sidebar">
                        <ul class="nav nav-stacked">
                            <li><h3 class="highlight">Powerlifting Forums <i class="pull-right"></i></h3></li>
                            <li><a href="http://badattitudegym.com/smf/index.php" title="Bad Attitude Gym">Bad Attitude Gym</a></li>
                            <li><a href="http://asp.elitefts.com/qa/" title="EliteFTS">EliteFTS</a></li>
                            <li><a href="http://www.fortified-iron.com/forum/index.php?showforum=8" title="Fortified Iron">Fortified Iron</a></li>
                            <li><a href="http://goheavy.com/forums/" title="Go Heavy">Go Heavy</a></li>
                            <li><a href="http://www.outlawpowerlifting.com/" title="Outlaws">Outlaws</a></li>
                            <li><a href="http://www.powerliftinguk.com/index.php" title="PowerliftingUK">PowerliftingUK</a></li>
                            <li><a href="http://www.wannabebigforums.com/forumdisplay.php?f=48" title="Wanna Be Big">Wanna Be Big</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-inverse navbar-bottom" style="padding:0 0 80px 0" id="bottomNavbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <h5 id='footer-header'> SITEMAP </h3>
                        <div class="col-sm-4" style="padding: 0 0 0 0px">
                            <p>News</p>
                            <p>contact</p>
                        </div>
                        <div class="col-sm-4" style="padding: 0 0 0 0px">
                            <p>FAQ</p>
                            <p>Privacy Policy</p>
                        </div>
                    </div>
                </div>
            </div>
        </nav>



    <script src="wilks.js"></script>

</body>

</html>
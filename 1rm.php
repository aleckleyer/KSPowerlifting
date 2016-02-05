<!DOCTYPE html>

<head>
    <title>
        KSPowerlifting - Macro Finder
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
                    <h1>1 Rep Max Calculator</h1>
                    </div>
                    <div class="addedPadding">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="weight" placeholder="Weight" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="reps" placeholder="Reps" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="button" id="submit" class="btn btn-success" value="Submit" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <p>1RM:<span id="result"></span></p>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>


                <?php include 'rightpanel.html'; ?>
        </div>
    </div>

     <?php include 'footer.html'; ?>

    <script type="text/javascript">
    
$('document').ready(function(){
    $("#submit").click(function(){
    var coef;
    var rep = $("#reps").val();
        rep = Number(rep);
    switch(rep){
        case 1:
            coef = 1.00;
            break;
        case 2:
            coef = .943;
            break;
        case 3:	
            coef = .906;
            break;
        case 4:
            coef = .881;
            break;
        case 5:	
            coef = .856;
            break;
        case 6:	
            coef = .831;
            break;
        case 7:	
            coef = .807;
            break;
        case 8:	
            coef = .786;
            break;
        case 9:	
            coef = .765;
            break;
        case 10:	
            coef = .744;
            break;
        case 11:
            coef = .723;
            break;
        case 12:	
            coef = .703;
            break;
        case 13:	
            coef = .688;
            break;
        case 14:	
            coef = .675;
            break;
        case 15:	
            coef = .662;
            break;
        case 16:	
            coef = .650;
            break;
        case 17:	
            coef = .638;
            break;
        case 18:	
            coef = .627;
            break;
        case 19:	
            coef = .616;
            break;
        case 20:	
            coef = .606;
            break;
        default:
            coef = .000;
    }
        var weight = $("#weight").val();
        weight = Number(weight);
        
        var answer = weight/coef;
            answer = Number(answer.toFixed(0));
        $("#result").text(" " + answer); 
    });
});
    
</script>
    
</body>

</html>
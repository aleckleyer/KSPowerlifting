<!DOCTYPE html>

<head>
    <title>
        KSPowerlifting - Program Tracker
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
                    <h1>Pounds and Kilo Conversion</h1>
                    </div>
                    <div class="addedPadding">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Pounds</label>
                                    <input type="text" id="pounds" class="form-control" placeholder="Lbs" />
                                </div>
                                <div class="col-md-6">
                                    <label>Kilos</label>
                                    <input type="text" id="kilos" class="form-control" placeholder="Kgs" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group" id="hideAlert">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="alert alert-danger" id="alert" role="alert"></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="button" id="submit" class="btn btn-success">Convert</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>If you would prefer the kg and lb conversion <b>chart</b>, <a href="KG2LB.pdf">click here!</a></p>
                        </div>
                    </div>
                </div>


                <?php include 'rightpanel.html'; ?>
            </div>
        </div>

     <?php include 'footer.html'; ?>



    <script type="text/javascript">
    
        $('document').ready(function(){
            $("#submit").click(function(){
                var pounds = $("#pounds").val();
                pounds = Number(pounds);
                
                var kilos = $("#kilos").val();
                kilos = Number(kilos);
                
                if((!pounds)&&(!kilos)){
                    $("#alert").text("Please fill in one of the fields");
                    $("#hideAlert").css("display","block");
                } else if((!kilos)&&(pounds)){
                    kilos = pounds / 2.2;
                    answer = Number(kilos.toFixed(1));
                    $("#kilos").val(answer);
                    $("#hideAlert").css("display","none");
                } else if((!pounds)&&(kilos)){
                    pounds = kilos * 2.2;
                    answer = Number(pounds.toFixed(1));
                    $("#pounds").val(answer);
                    $("#hideAlert").css("display","none");
                } else if((pounds)&&(kilos)){
                    $("#alert").text("Leave one field blank");
                    $("#hideAlert").css("display","block");
                }
            });
        });
        
    </script>

</body>

</html>
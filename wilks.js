$(document).ready(function () {
    $("#bodyweight").focus();

    $(".submits").keyup(function (enter) {
        if (enter.keyCode == 13) {
            wilks();
        }
    });

    $("#findValue").click(function (enter) {
        enter.preventDefault();
        wilks();
    });
    
    $("#submitGoal").click(function(){
        wilksgoal();
    });

});

function wilks(){
        //Get value of gender input
        var gen = $('input[name="gender"]:checked').val();

        //Get value of unit of measurement input
        var unit = $('input[name="unit"]:checked').val();

        //Get bodyweight value
        var bWeight = $('#bodyweight').val();

        //Get amount of weight lifted
        var lWeight = $('#liftedweight').val();

        //Declare wilks value variable
        var wilks = 0;

        
        if (gen == 1) {

            //Coefficients for men
            a=-216.0475144;
            b=16.2606339;
            c=-0.002388645;
            d=-0.00113732;
            e=7.01863E-06;
            f=-1.291E-08;

        } else if(gen == 2){  

            //Coefficients for women
            a=594.31747775582;
            b=-27.23842536447;
            c=0.82112226871;
            d=-0.00930733913;
            e=0.00004731582;
            f=-0.00000009054;

        }

        //Convert pounds into kilograms
        if(unit == 1) {
            bWeight = (bWeight / 2.20462262).toFixed(2);
            lWeight = (lWeight / 2.20462262).toFixed(2);
        }


        //Calculate wilks value
        wilks = lWeight*(500/(a+(b*bWeight)+
                (c*Math.pow(bWeight,2))+
                (d*Math.pow(bWeight,3))+
                (e*Math.pow(bWeight,4))+
                (f*Math.pow(bWeight,5)))); 

        //Round Wilks to 4 places
        wilks = wilks.toFixed(4);

        $("#result").html(wilks);

}

function wilksgoal(){
    
        if (!$('input[name="gender"]:checked').val()){
            alert("Input value for gender!");
        } else {
            var gen = $('input[name="gender"]:checked').val();
        }
    
        if (!$('input[name="unit"]:checked').val()){
            alert("Input value for unit!");
        } else {
            var unit = $('input[name="unit"]:checked').val();
        }
        
        if (!($('#bodyweight').val())){
            alert("Don't forget to put in your bodyweight! How else will we find your original wilks?");
        } else {
            var bWeight = $('#bodyweight').val();
        }

        //Declare wilks value variable
        var wilks = 0;

        
        if (gen == 1) {

            //Coefficients for men
            a=-216.0475144;
            b=16.2606339;
            c=-0.002388645;
            d=-0.00113732;
            e=7.01863E-06;
            f=-1.291E-08;

        } else if(gen == 2){  

            //Coefficients for women
            a=594.31747775582;
            b=-27.23842536447;
            c=0.82112226871;
            d=-0.00930733913;
            e=0.00004731582;
            f=-0.00000009054;

        }
    
        var cSquat = $("#currentSquat").val();
        cSquat = Number(cSquat);
    
        var cBench = $("#currentBench").val();
        cBench = Number(cBench);
    
        var cDead = $("#currentDead").val();
        cDead = Number(cDead);

        var cTotal = cSquat + cBench + cDead;
        $("#currentTotal").html(cTotal);
    
        if(unit == 1) {
            bWeight = (bWeight / 2.20462262).toFixed(2);
            cTotal = (cTotal / 2.20462262).toFixed(2);
        }
    
        wilks = cTotal*(500/(a+(b*bWeight)+
                (c*Math.pow(bWeight,2))+
                (d*Math.pow(bWeight,3))+
                (e*Math.pow(bWeight,4))+
                (f*Math.pow(bWeight,5)))); 

        wilks = wilks.toFixed(4);
    
        $("#currentWilks").html(wilks);
    
        var gWilks = $("#goalWilks").val();
        gWilks = Number(gWilks);
        wilks = Number(wilks);

        var wilksRatio = gWilks / wilks;
        wilksRatio = Number(wilksRatio);

        if (unit == 1){
            var gSquat = wilksRatio * cSquat;
        } else {
            var gSquat = wilksRatio * cSquat * 2.204;
        }
        gSquat = Number(gSquat.toFixed(1));
        var gSquatK = Number((gSquat/2.204).toFixed(1));
        $("#goalSquatKG").html(" / " + gSquatK);
        $("#goalSquat").html(gSquat);
    
        if (unit == 1) {
            var gBench = wilksRatio * cBench;
            
        } else {
            var gBench = wilksRatio * cBench *2.204;
        }
        gBench = Number(gBench.toFixed(1));
        var gBenchK = Number((gBench/2.204).toFixed(1));
        $("#goalBenchKG").html(" / " + gBenchK);
        $("#goalBench").html(gBench);
    
        if (unit == 1){
            var gDead = wilksRatio * cDead;
        } else {
            var gDead = wilksRatio * cDead * 2.204;
        }
        gDead = Number(gDead.toFixed(1));
        var gDeadK = Number((gDead/2.204).toFixed(1));
        $("#goalDeadKG").html(" / " + gDeadK);
        $("#goalDead").html(gDead);

        var gTotal = gSquat + gBench + gDead;
        gTotal = Number(gTotal.toFixed(1));
        $("#goalTotal").html(gTotal);
        var gTotalK = Number((gTotal/2.204).toFixed(1));
        $("#goalTotalKG").html(" / " + gTotalK);
    
}

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="//artifacts.bbcomcdn.com/content-app/1.1.4/wrapper.min.css" />
    <link rel="stylesheet" type="text/css" href="//artifacts.bbcomcdn.com/content-app/1.1.4/content.min.css" />
    <link rel="stylesheet" type="text/css" href="//artifacts.bbcomcdn.com/cms-app/1.3.7/legacy-frontend.min.css" />
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="//artifacts.bbcomcdn.com/bb-ui/2.0.24/bb-ui-lowres-icons.css" /><![endif]-->
    <script type="text/javascript" id="jquery" src="//artifacts.bbcomcdn.com/jquery/1.8.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="/DOTLESS/styles/articles-global.css?v=14" />
        <link href="/images/bb-favicon.png?v=2" rel="shortcut icon" />
    
    <script>
    /*<![CDATA[*/

        // THIS SHOULD BE LOADED BEFORE ALL BBCOM CSS because we fork CSS
        // based on these classes.
        // We can't use conditional comments b/c our HTML must be valid XML.
        // Therefore, use this script to add is-ie <version> to <html> for
        // cases where we need to hack for IE
        // cc_on bit ripped from http://tanalin.com/en/articles/ie-version-js/
        (function () {
            var oldIeVersion,
                    addIsIEClass = function (ver) {
                        var root = document.documentElement;
                        root.className = root.className + ' is-ie' + ver;
                    };

            oldIeVersion = /*@cc_on (function() {switch(@_jscript_version) {case 5.8: return 8; case 9: return 9; case 10:
             return 10;}})() || @*/ 0;

            if (oldIeVersion) {
                addIsIEClass(oldIeVersion);
            } else if (navigator.userAgent.match(/Trident\/7/)) {
                addIsIEClass(11);
            }
        })();

        // For IE10. console methods are generally polyfilled in bb.js,
        // so this isn't technically req'd. IE8/9 don't have a console
        // obj when dev tools are closed, we need to check for window.console
        // before assigning noop methods.
        if (window.console) {
            console.debug = console.debug || function noop() {
                    };
        }

    /*]]>*/
    </script>

                <title>Calculate Your Macronutrients Intake!</title>
        
                
        <meta name="template" content="CATEGORY">
    <meta name="robots" content="INDEX,FOLLOW">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="layout" content="RESPONSIVE">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="dns-prefetch" href="//api.bodybuilding.com">
    <link rel="dns-prefetch" href="//imagecdn.bodybuilding.com">
    <link rel="dns-prefetch" href="//artifacts.bbcomcdn.com">
    <meta property="og:site_name" content="Bodybuilding.com">
    <meta property="og:type" content="website">
    <meta property="og:determiner" content="auto">
    <meta property="fb:app_id" content="197335844169">
    <meta property="og:type" content="article" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:site_name" content="Bodybuilding.com" />
    <meta property="og:locale" content="en_US" />
    <link rel="publisher" href="https://plus.google.com/+bodybuildingcom" />
    <meta property="article:publisher" content="https://www.facebook.com/Bodybuildingcom" />
    <meta name="twitter:site" content="Bodybuildingcom" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:domain" content="bodybuilding.com" />
    <meta name="twitter:app:id:iphone" content="687818146">
    <meta name="twitter:app:id:ipad" content="687818146">
    <meta name="twitter:app:id:googleplay" content="com.bodybuilding.mobile">
    <meta property="fb:admins" content="52300022" /> <!-- Jesse E. -->
    <meta property="fb:admins" content="640006053" /> <!-- Richard B. -->
    <meta property="fb:admins" content="1054310542" /> <!-- Derrick H. -->
    <meta property="fb:admins" content="594497898" /> <!-- Shane H. -->
    <meta property="fb:admins" content="696674114" /> <!-- Ryan D. -->
    <meta property="fb:admins" content="100000129290981" /> <!-- James P. -->
    <meta property="fb:profile_id" content="55409478056" />
    <meta name="application-name" content="Bodybuilding.com" />
    <meta name="msapplication-config" content="http://www.bodybuilding.com/browserconfig.xml" />
    <meta name="msapplication-starturl" content="http://www.bodybuilding.com/" />
    <link rel="alternate" type="application/rss+xml" title="Bodybuilding.com Latest Articles" href="http://www.bodybuilding.com/rss/articles" />
    
        <meta property="article:modified_time" content="2015-12-07T13:26Z" />
    <meta property="og:updated_time" content="2015-12-07T13:26Z" />
    <meta property="article:published_time" content="2014-09-04T00:00Z" />
    
                <meta name="keywords" content="Macronutrients, carbs, protein, fats, calories, hormones, testosterone, calculator, insulin">
        
                <meta itemprop="image" content="//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-facebook.jpg" />
        <meta property="og:image" content="//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-facebook.jpg" />
        <meta name="twitter:image:src" content="//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-facebook.jpg" />
        
                <link rel="canonical" href="http://www.bodybuilding.com/fun/macronutrients_calculator.htm" />
        <meta property="og:url" content="http://www.bodybuilding.com/fun/macronutrients_calculator.htm" />
        <meta property="twitter:url" content="http://www.bodybuilding.com/fun/macronutrients_calculator.htm">
        
                <meta itemprop="name" content="Calculate Your Macronutrients Intake!" />
        <meta property="og:title" content="Calculate Your Macronutrients Intake!" />
        <meta name="twitter:title" content="Calculate Your Macronutrients Intake!" />
        
                <meta name="description" content="There are three major macronutrients that the human body needs in order to function properly: carbohydrates, protein, and fats.  Find out how much of these you need on a daily basis with this handy calculator!">
        <meta itemprop="description" content="There are three major macronutrients that the human body needs in order to function properly: carbohydrates, protein, and fats.  Find out how much of these you need on a daily basis with this handy calculator!" />
        <meta property="og:description" content="There are three major macronutrients that the human body needs in order to function properly: carbohydrates, protein, and fats.  Find out how much of these you need on a daily basis with this handy calculator!"     />
        <meta name="twitter:description" content="There are three major macronutrients that the human body needs in order to function properly: carbohydrates, protein, and fats.  Find out how much of these you need on a daily basis with this handy calculator!" />
        
                            <link rel="author" href="http://www.bodybuilding.com/author/contributing-writer" />
                            <meta property="article:author" content="Bodybuildingcom" />
                        
                                    <meta name="twitter:creator" content="@Bodybuildingcom" />
                
                            <meta property="article:section" content="Nutrition" />
                
                            <meta property="article:tag" content="Macronutrients" />
                    <meta property="article:tag" content="carbs" />
                    <meta property="article:tag" content="protein" />
                    <meta property="article:tag" content="Bodybuilding.com" />
                
                <meta property="og:see_also" content="http://www.bodybuilding.com/fun/whats-new.html" />
        
            <meta charset="utf-8" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="squat.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="main.css">
            

    
        
    <link rel="replies" type="text/html" href="http://api.bodybuilding.com/commenting/article/aHR0cDovL3d3dy5ib2R5YnVpbGRpbmcuY29tL2Z1bi9tYWNyb251dHJpZW50c19jYWxjdWxhdG9yLmh0bQ==?sort=DATE_ASC" />
       <script>
        (function(d,a,c,b,f){var e=a.getElementsByTagName(c)[0];a=a.createElement(c);c="dataLayer"!=b?"\x26l\x3d"+b:"";d[b]=d[b]||[];d[b].push({"gtm.start":(new Date).getTime(),event:"gtm.js"});a.async=!0;a.src="https://www.googletagmanager.com/gtm.js?id\x3d"+f+c;e.parentNode.insertBefore(a,e)})(window,document,"script","dataLayer","GTM-MHRD92");
    </script>

    <link type="text/css" rel="stylesheet" href="http://www.bodybuilding.com/DOTLESS/css/dpg-headers.css?v=20" />
<link type="text/css" rel="stylesheet" href="http://www.bodybuilding.com/DOTLESS/css/dpg-responsive-content.css?v=881" />
<link type="text/css" rel="stylesheet" href="http://www.bodybuilding.com/DOTLESS/css/animate.css" />
<link type="text/css" rel="stylesheet" href="http://www.bodybuilding.com/DOTLESS/css/dpg-calculators.css?v=20" />
    
    <script type="text/javascript" async src="http://www.bodybuilding.com/javascript/dpg-calculators.js?v=2"></script>

<style type="text/css">#DPG-rotator-slide-1 { background-position: center center; background-size: cover; background-repeat: no-repeat; max-width: 2570px; } @media all and (min-width: 1200px) { #DPG-rotator-slide-1 { background-image: url('//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-desktop.jpg'); } } @media all and (max-width: 1199px) and (min-width: 501px) { #DPG-rotator-slide-1 { background-image: url('//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-tablet.jpg'); } } @media all and (max-width: 500px) { #DPG-rotator-slide-1 { background-image: url('//cms.bbcomcdn.com/fun/images/2015/calculate-your-macronutrients-intake-mobile.jpg'); } } </style>
</head>
    
<body lang="en">

 




     

      
          <?php include 'nav.html'; ?>

  
<div class="container-fluid">
        <div class="row">
                <?php include 'leftpanel.html'; ?>
            
             <div class="col-sm-8">
                <div class="text-center">
                <h1>Macronutrient Calculator</h1>
                </div>
                <div class="dpg-calculator macros-calculator">
                    <div class="dpg-calculator macros-calculator">
                        <div class="calc-container"><span class="calc-subheader">Age</span>
                            <div class="calc-row"><input type="text" class="bbTextBox calc-textbox" name="age" placeholder="Years" value="" /></div>
                            <span class="calc-subheader">Sex</span>
                            <div class="calc-row"><input type="radio" id="macros-male" name="sex" value="M" checked="checked" /> <label class="calc-label-small" for="macros-male"><span></span>Male</label> <input type="radio" id="macros-female" name="sex" value="F" /> <label class="calc-label-small calc-float-right" for="macros-female"><span></span>Female</label></div>
                            <span class="calc-subheader">Height</span>
                            <div class="calc-row"><input type="radio" id="macros-feet" name="height-system" value="feet" checked="checked" /> <label class="calc-label-small" for="macros-feet"><span></span>Feet</label> <input type="radio" id="macros-meters" name="height-system" value="meters" /> <label class="calc-label-small calc-float-right" for="macros-meters"><span></span>Meters</label></div>
                            <div class="calc-row"><input type="text" class="bbTextBox calc-textbox-half" name="height-tens" placeholder="Feet" value="" />      <input type="text" class="bbTextBox calc-textbox-half calc-float-right" name="height-units" placeholder="Inches" value="" /></div>
                            <span class="calc-subheader">Weight</span>
                            <div class="calc-row"><input type="radio" id="macros-pounds" name="weight-system" value="pounds" checked="checked" /> <label class="calc-label-small" for="macros-pounds"><span></span>Pounds</label> <input type="radio" id="macros-kilos" name="weight-system" value="kilos" /> <label class="calc-label-small calc-float-right" for="macros-kilos"><span></span>Kilograms</label></div>
                            <div class="calc-row"><input type="text" name="weight" class="bbTextBox calc-textbox" placeholder="Pounds" /></div>
                            <span class="calc-subheader">Goal</span>
                            <div class="calc-row"><input type="radio" id="macros-goal1" name="goal" value="fat-loss" checked="checked" /> <label class="calc-label" for="macros-goal1"><span></span>Fat Loss</label></div>
                            <div class="calc-row"><input type="radio" id="macros-goal2" name="goal" value="maintenance" /> <label class="calc-label" for="macros-goal2"><span></span>Maintenance</label></div>
                            <div class="calc-row"><input type="radio" id="macros-goal3" name="goal" value="gainz" /> <label class="calc-label" for="macros-goal3"><span></span>Muscle Gainz</label></div>
                            <span class="calc-subheader">Activity Level</span>
                            <div class="calc-row"><input type="radio" id="macros-activity1" name="activity" value="L" checked="checked" /> <label class="calc-label" for="macros-activity1"><span></span>Lightly active (moderate exercise but sedentary job)</label></div>
                            <div class="calc-row"><input type="radio" id="macros-activity2" name="activity" value="M" /> <label class="calc-label" for="macros-activity2"><span></span>Moderately active (intense exercise but sedentary job)</label></div>
                            <div class="calc-row"><input type="radio" id="macros-activity3" name="activity" value="V" /> <label class="calc-label" for="macros-activity3"><span></span>Very active (moderate exercise and active job)</label></div>
                            <div class="calc-row"><input type="radio" id="macros-activity4" name="activity" value="E" /> <label class="calc-label" for="macros-activity4"><span></span>Extra active (intense exercise and active job)</label></div>
                            <button class="bb-flat-btn calc-submit" type="button">Calculate</button>
                            <h3 class="dpg-h3 calc-answer"></h3>
                        </div>
                    </div>
                </div>
            </div>


                <?php include 'rightpanel.html'; ?>
        </div>
    </div>

     <?php include 'footer.html'; ?>
              
        


      
     
      
      
  
              
              
  
      
              
        
          
<bb-login-modal class="bb-bindable" bb-bindable></bb-login-modal>
<bb-signup-modal class="bb-bindable" bb-bindable></bb-signup-modal>
<bb-user-stats-modal class="bb-bindable" bb-bindable></bb-user-stats-modal>
<bb-feedback-dialog class="bb-bindable" bb-bindable></bb-feedback-dialog>

<!--[if lte IE 9]>
<script src='//artifacts.bbcomcdn.com/bb-polyfill/1.0.8/bb-polyfill-ie-body.js' id='bb-polyfill-ie-body-0'></script>
<![endif]-->
<script src='//artifacts.bbcomcdn.com/dust/2.5.0/dust-full.min.js' id='dust-255'></script>
<script src='//artifacts.bbcomcdn.com/requirejs/2.1.15/requirejs.min.js' id='require-500'></script>
<script src='//artifacts.bbcomcdn.com/bbcomcdn-common/2.1.21/bb.min.js' id='bbc-501'></script>
<script id='require-config-502'>(function requireConfig() {
var rconfig = {
baseUrl:'/'
,
config : {
'bb/util/module-info':{
env:'prod',
loginUrl:'https://api.bodybuilding.com/login',
facebookLoginUrl:'https://api.bodybuilding.com/login/facebook',
server:{
name:'null',
version:'null'

}
,siteSection:'Articles & Videos',taxonomyKey:'NutritionCalculators',topNavUrl:'//api.bodybuilding.com/nav/top',singlePageApp:'false',pageVisibility:'PUBLIC',mobileNavUrl:'//api.bodybuilding.com/nav/mobile/{selector}',html5Mode:'true',pageRole:'VISITOR'
}
}
,
paths:{
'angular':[
'//artifacts.bbcomcdn.com/angular/1.2.26/angular.min'],
'moment':[
'//artifacts.bbcomcdn.com/moment/2.8.4/moment.min']
}
,
shim:{
'angular':{
exports:'angular'
}

}
,waitSeconds:'10'
};

require.config(rconfig);
})();

require(['//artifacts.bbcomcdn.com/cms-app/1.3.7/frontend.min.js'], function() {
'use strict';
require(['bb/ui/wrapper-app', 'bb/cms/main-frontend'], function(WrapperApp, CmsApp) {
    var app;
    if (typeof CmsApp === "function") {
        app = new CmsApp(JSON.parse('{"elementSelector":".Wr__body","taxonomyKey":"root"}'));
    } else {
        app = new WrapperApp(JSON.parse('{"elementSelector":".Wr__body","taxonomyKey":"root"}'));
    }
    app.init();
});

});
</script>
<script id='google-analytics-2147483647'>(function() {
    try {
        (function(e, t, n, r, i, s, o) {
            e["GoogleAnalyticsObject"] = i;
            e[i] = e[i] || function() {
                (e[i].q = e[i].q || []).push(arguments)
            }, e[i].l = 1 * new Date;
            s = t.createElement(n), o = t.getElementsByTagName(n)[0];
            s.async = 1;
            s.src = r;
            o.parentNode.insertBefore(s, o)
        })(window, document, "script", "//www.google-analytics.com/analytics.js", "ga");
        ga("create", "UA-30385920-1", "bodybuilding.com");
        ga("send", "pageview")
    } catch (ex) {}
})()</script>
<script id='inspectlet-2147483647'>(function() {
    try {
        window.__insp = window.__insp || [];
        __insp.push(["wid", 2024354313]);
        (function() {
            function e() {
                var e = document.createElement("script");
                e.type = "text/javascript";
                e.async = true;
                e.id = "inspsync";
                e.src = ("https:" == document.location.protocol ? "https" : "http")                    + "://cdn.inspectlet.com/inspectlet.js";
                var t = document.getElementsByTagName("script")[0];
                t.parentNode.insertBefore(e, t)
            }
            if (window.attachEvent) {
                window.attachEvent("onload", e)
            } else {
                window.addEventListener("load", e, false)
            }
        })()
    } catch (ex) {}
})()</script>
<script id='omniture-script-2147483647'>(function omniture() {
    var submitOnLoad = true;
    function initVars() {
        try {
            var s_omni = window.s_omni || {};
            s_omni.articleTitle="Fun: -Calculate Your Macronutrients Intake!";
            s_omni.inTagPn="true";
            s_omni.contentTopCat="";
            s_omni.channel="fun";
            s_omni.memberStatus="Anonymous";
            s_omni.selector="NutritionCalculators";
            s_omni.pageName="Fun: Article: Calculate Your Macronutrients Intake!";
            s_omni.pageCat="Fun: Author";
            s_omni.events="event3";
            s_omni.events="event3";

            window.s_omni = s_omni;
        }
        catch(e) {
        }
    }

    function _writeScode(sCode) {
        var out, body;
        body = $document.body;
        out = $document.createElement('span');
        // we are trusting the content coming back from omniture
        out.innerHTML = sCode;
        body.appendChild(sCode);
    }

    function onScodeLoaded() {
        var s_code;
        if(submitOnLoad) {
            s_code = s.t();
            if (s_code) {
                console.log('Omniture tracking call returned a value! %o', s_code);
                _writeScode(s_code);
            }
        }
    }

    function onScodeLoadError() {
        console.error('Error loading scode js. %o', arguments);
    }


    function writeScodeScript() {
        var scodeScript = document.createElement('script');

        if('async' in scodeScript) {
            scodeScript.async = true;
            if(scodeScript.readyState) {
                scodeScript.onreadystatechange = function onReadyStateChanged(event) {
                    if(scodeScript.readyState === 'loaded') {
                        onScodeLoaded();
                    }
                };
            }
            else {
                scodeScript.onload = onScodeLoaded;
                scodeScript.onerror = onScodeLoadError;
            }
        }
        else {
            scodeScript.defer = true;
        }

        //src set at very end to avoid triggering the d/l
        scodeScript.src = '//assets.bodybuilding.com/clientscript/s_code.js';

        document.getElementsByTagName('head')[0].appendChild(scodeScript);
    }

    writeScodeScript();
    initVars();

})();
</script>


</body>
</html>
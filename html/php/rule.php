<!DOCTYPE html>
<?php
/**
 * Ensure that path to autoload.php is correct
 *
**/

//require __DIR__ . '/vendor/autoload.php'; // include the autoload.php present in your vendor folder.

use Iflylabs\iFlyChat;

/**
 * require iflychat.php if you are not using composer.
 */
require_once('../lib/iFlyChat.php'); // to be used in case you are not using composer.


/**
 * Get your APP ID and API Key from https://iflychat.com
**/

const APP_ID = '741529fb-a220-4190-9781-b7ef1c470ae0';
const API_KEY =  'iiPf24R6Q5CJcTAIDrujXnGgDg8BOyy-2eJByBgc2IcW54789';


$iflychat = new iFlyChat(APP_ID, API_KEY);

$iflychat_code = $iflychat->getHtmlCode();

?>
<head>
    <meta charset="utf-8">
    <title>The rule is simple</title>
    <meta name="author" content="Sam Norton">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- favicon -->
    <link rel="icon" href="../images/favicon.ico">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
    <link rel="stylesheet" href="../css/normalize.css" media="all">
    <link rel="stylesheet" href="../css/style.css" media="all">
    <link rel="stylesheet" href="../css/bootstrap.min" media="all">
    <link rel="stylesheet" type="text/css" href="../css/eorzeaclock.css">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <script src="../js/jquery-1.11.1.min.js"></script>
     <script src="../js/device.min.js"></script> <!--OPTIONAL JQUERY PLUGIN-->
    <script src="../js/jquery.mb.YTPlayer.js"></script>
    <script src="../js/custom.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/eorzeaclock.js" charset="UTF-8"></script>

</head>
<body>
<section class="big-background">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=FxTF_jG6dac',containment:'body',autoPlay:true, mute:true, startAt:6, opacity:1}"></a>
        
        <div class="pattern"></div>                                
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                            
                            <span class="icon-bar"></span>                            
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">The Radar's Co</a>
                    </div>
                    
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="nav navbar-nav">
                            <li><a href="../index.html">Top</a></li>
                            <li><a href="main.php">About us</a></li>
                            <li class="active"><a href="#">Rule of our Free Company</a></li>
                            <li><a href="request.php">Member Page</a></li>                            
                            <li><a href="#">link (閉鎖中)</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="visible-lg-block" id="eorzeaclock">&nbsp;
            </div><script type="text/javascript">EorzeaClock()</script>

            <div class="big-background-container">
            <h1 class="title">The rule of our Freecompany</h1>
                    <hr Class="hr">
            </div>     
</section>



<div class="wrapper">
            <section class="about-section">
     
                <div class="about-section-container">
                    <h2 class="about-section-title">the rule of our freecompany</h2>
                    <hr>
                    <p>ルールは至ってシンプルです</p>
                    <ol>
                        <li>周りの迷惑になると思われる行為は一切禁止</li>
                        <li>ログイン、ログアウトを含めた日常的にも挨拶をかかさない事</li>
                    </ol>
                    <p>上記の2つが守れれば、なんの問題もありません。</p>
                </div>
            </section>
            

     <section class="small-background-section">
     <div class="pattern"></div>
                    <div class="small-background-container">
                        <h2 class="small-background-title"><span>The Social Account</span></h2>
                         <ul class="socials">
                        <li><a href="https://twitter.com/co_radar" target="_blank"><i class="fa fa-twitter-square fa-5x"></i></a></li>

                        </ul>
                    </div>
    </section>


</div>
</body>
</html>
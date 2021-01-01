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
    <title>About us</title>
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
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=UPaI3YV4GeA',containment:'body',autoPlay:true ,startAt:0 ,stopAt:42 ,mute:true, opacity:1}"></a>
        
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
                            <li class="active"><a href="#">About us</a></li>
                            <li><a href="rule.php">Rule of our Free Company</a></li>
                            <li><a href="request.php">Member Page</a></li>                            
                            <li><a href="#">link (閉鎖中)</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="visible-lg-block" id="eorzeaclock">&nbsp;
            </div><script type="text/javascript">EorzeaClock()</script>
            
            <div class="big-background-container">
            <h1 class="title">About our Free Company</h1>
                    <hr Class="hr">
            </div>     
</section>


<div class="wrapper">
        <section class="about-section">
        <!--協力、努力、誠実、楽しむ、助け合い。皆で楽しむ事が重要　そんな仲間が集まったカンパニー  -->
                <div class="about-section-container">
                    <h2 class="about-section-title">どんなフリーカンパニーなの？</h2>
                    <hr>
                    <h2 style="text-decoration: underline;">協力、努力、誠実、楽しむ、助け合い。皆で楽しむ事が重要　そんな仲間が集まったカンパニー</h2>
                    <p>私たちは常に助け合うことを第一優先にしています、誰かが装備を作ってあげたり、誰かがコンテンツを募集したり
                       そういった些細な助け合いから私たちは成り立っています。
                       <br>
                       必要なのは慈悲ではありません、楽しさを共有することです。
                    </p>
                </div>

                <div class="about-section-container">
                    <h2 class="about-section-title">どうやって参加するの？</h2>
                    <hr>
                        <p>基本的に参加方法はマスターの<span style="text-decoration: underline;"><a href="https://jp.finalfantasyxiv.com/lodestone/character/14595382/">[Compare Mariolo]</a></span>へ連絡をお願いします
                        </p>
                </div>
                
                <div class="about-section-container">
                    <h2 class="about-section-title">誰がいるの？</h2>
                    <hr>
                        <p>絶賛メンバーリスト作成中</p>
                </div>
            </section>

            <section class="about-section">
        <!--協力、努力、誠実、楽しむ、助け合い。皆で楽しむ事が重要　そんな仲間が集まったカンパニー  -->
                <div class="about-section-container">
                    <h2 class="about-section-title">サービス一覧</h2>
                    <hr>


                    <div class="container">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                
                                <div class="panel panel-primary">
                            <div class="panel-heading">
                                    <h1>装備支援</h1>
                            </div>

                                <div class="panel-body">                            
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h2><span class="glyphicon glyphicon-ok" aria-hidden="true"></span>対象装備<h2>
                                    </div>
                                    
                                    <div class="panel-body">
                                        <ul class="list-group">
                                                 LV59までの各種レベル隊の装備。</li>
                                                 素材が用意できている新式。</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="panel panel-danger">
                                    <div class="panel-heading">
                                        <h2><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>対象外装備<h2>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-group">
                                                 60LV以上の各種レベル隊の装備。</li>
                                                 素材が用意できていない新式。</li>
                                                 おしゃれ装備。</li>
                                            </ul>
                                    </div>
                                </div>
                                    <p>なお本サービスはFCマスターが行っているものです。
                                        FC内のマスター以外のユーザー同士で交流を行い装備を作ってもらった場合は上記には該当しない行為となります。
                                    </p>
	                        </div>
                        </div>

                                </div>
                                <div class="col-sm-6 col-xs-12">
                                
                                <div class="panel panel-primary">
                            <div class="panel-heading">
                                    <h1>テレポ代支援</h1>
                            </div>
                            <div class="panel-body">
                                <div class="panel panel-warning">
                                    <div class="panel-heading">
                                        <h2>条件<h2>
                                    </div>
                                    <div class="panel-body">
                                        <ul class="list-group">
                                             毎日6時間以上ログインを行い、アクティブ認定を受ける。</li>
                                             FCマスターのDaggyのフレンド登録を行う</li>
                                        </ul>
                                    </div>
                                </div>
                                <p>なお本サービスはテスト段階です、突如となくサービスが終了する場合がありますがご理解とご協力をお願いします。<br />
                            土日は、毎週、カンパニーアクションのテレポ割?使わせていただきますのでご安心を。</p>
                                </p>
                            </div>

                                
                                </div>
                            </div>
                        </div>
                            


                    
                        
                        
                        
                            
                        
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
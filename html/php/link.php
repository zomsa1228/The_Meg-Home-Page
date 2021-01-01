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
    <title>FC Links</title>
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
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=yFeF4CEu4gA',containment:'body',autoPlay:true, mute:true, startAt:10, opacity:1}"></a>
        
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
                            <li><a href="rule.php">Rule of our Free Company</a></li>    
                            <li><a href="request.php">Member Page</a></li>                            
                            <li class="active"><a href="#">link</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            
            <div class="visible-lg-block" id="eorzeaclock">&nbsp;
            </div><script type="text/javascript">EorzeaClock()</script>
                           
            <div class="big-background-container">
            <!-- <h1 class="title">The Social Account and Links</h1> -->
                <h2 Style="color: #fff;">閉鎖中なのにアクセスしたな！
                </h2>
                    
                    <hr Class="hr">
            </div>     
</section>


<div class="wrapper">
            <section class="about-section">
     
                <div class="about-section-container">
                    <h2 class="about-section-title">共有する意味とは。</h2>
                    <hr>
                    <p>例えば、あなたが何か動画や画像をつくり、投稿することで私たちのサイトはより豊かなコンテンツになっていきます。
                       <br>
                       必要なのは慈悲ではありません、楽しさを共有することです。
                    </p>
                    <div id="context">
                    <h2 class="small-background-title"><span>The Social Account and Links</span></h2>
                    <hr>

                        <div class="Link Twitter">
                            <h2><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a></h2>
                            <div class="row row-height">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Radar's Co official</h5>
                                        </div>

                                        <div class="panel-body">
                                         協力、努力、誠実、楽しむ、助け合い。皆で楽しむことが重要！そんな仲間が集まったカンパニー！であるが多数「猫」が登場する（＾ω＾）ねこ ぬこぬこ日記でもある
                                        </div>

                                        <hr style="padding:0; margin:0;">

                                        <div class="panel-body">
                                            <a href="https://twitter.com/co_radar" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">Roimy_Zomsa</h5>
                                        </div>

                                        <div class="panel-body">
                                        社会批判と小説、あとゲームに関することを淡々とツイートしてます。 本当に人気があるものは批判も多い 
                                        </div>

                                        <hr style="padding:0; margin:0;">

                                        <div class="panel-body">
                                            <a href="https://twitter.com/zomasa" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                                        </div>

                                    </div>                                
                                </div>
                            </div>                  
                        </div>


                        <div class="Link database">
                            <h2><i class="glyphicon glyphicon-book" aria-hidden="true"></i>Database</a></h2>
                            <div class="row row-height">
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">アイテム データベース：エリオネス</h5>
                                        </div>

                                        <div class="panel-body">
                                         FFXIVの完全なるデータベース、アイテム名からレシピ、家具を画像で見たりなどが可能
                                        </div>

                                        <hr style="padding:0; margin:0;">

                                        <div class="panel-body">
                                        <a href="https://eriones.com/" target="_blank"><i class="glyphicon glyphicon-book" aria-hidden="true"></i>エリオネス</a>
                                        </div>
                                    </div>                                
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h5 class="panel-title">ハウジング 向けデータベース：FF14 ハウジング</h5>
                                        </div>

                                        <div class="panel-body">
                                        社会批判と小説、あとゲームに関することを淡々とツイートしてます。 本当に人気があるものは批判も多い 
                                        </div>

                                        <hr style="padding:0; margin:0;">

                                        <div class="panel-body">
                                        <a href="https://ff14housing.com/" target="_blank"><i class="glyphicon glyphicon-book" aria-hidden="true"></i>エリオネス</a>
                                        </div>

                                    </div>                                
                                </div>
                            </div>                  
                        </div>




                        <div class="Link database">

                                    <div style="height=120%;" class="col-xs-12 col-sm-6 col-md-6">
                                        <p>エリオネス<br/>
                                        ギャザクラ向けデータベース</p>
                                        <a href="https://eriones.com/" target="_blank"><i class="glyphicon glyphicon-book" aria-hidden="true"></i>FF14 ハウジング</a>
                                    </div>

                                    <div class="col-xs-12 col-sm-6 col-md-6">
                                        <p>Roimy_Zomsa</p>
                                        <a href="https://twitter.com/zomasa" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>Twitter</a>
                                    </div>
                        </div>

                            <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                            
                            
                            </div> -->


                            <!-- <div class="col-xs-12 col-sm-6 col-md-3">
                            
                            
                            </div> -->
                            おすすめサイト

                            <!-- 攻略サイト
                            FINAL FANTASY XIV n Wiki* 
                            https://wikiwiki.jp/ff14n/

                            ギャザクラ向けデータベース
                            エリオネス
                            https://eriones.com/

                            ハウジングデータベース
                            FF14 ハウジング
                            https://ff14housing.com/

                            世界観について
                            FF14 Online Wiki
                            https://ff14wiki.info/

                            ミラプリコーディネート投稿サイト
                            MIRAPRI SNAP
                            https://mirapri.com/

                            ハウジング投稿サイト
                            HOUSING SNAP
                            https://housingsnap.com/

                            おすすめツールサイト
                            FF14俺tools
                            https://ff14moo.moo.jp/

                            むーむーのネタ帳
                            https://ffxiv.es.exdreams.net/

                            ブログ系
                            一撃確殺SS日記
                            https://sumimarudan.blog7.fc2.com/ -->

                        


                    <table id="tables">
                                <tr>
                                    <th>Radar's Co official</th>
                                    <td><a href="https://twitter.com/co_radar" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>Twitter</td></a>
                                </tr>
                                <tr>
                                    <th>Roimy_Zomsa</th>
                                    <td><a href="https://twitter.com/zomasa" target="_blank">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>Twitter</td></a>
                                </tr>
                                <tr>
                                    <th>MANA VC LS</th>
                                    <td><a href="https://jp.finalfantasyxiv.com/lodestone/character/9746748/blog/2969450/" target="_blank">
                                        <img width="15px" src="https://img.finalfantasyxiv.com/lds/pc/global/images/favicon.ico?1490749553">
                                        Loadstone</td>
                                </tr>
                                <tr>
                                    <th>FF Likes</th>
                                    <td><a href="https://jp.finalfantasyxiv.com/lodestone/character/9746748/blog/2729555/" target="_blank">
                                        <img width="15px" src="https://img.finalfantasyxiv.com/lds/pc/global/images/favicon.ico?1490749553">
                                        Loadstone</td>
                                </tr>
                                <tr>
                                    <th>Our_FC</th>
                                    <td><a href="https://jp.finalfantasyxiv.com/lodestone/freecompany/9227453424017114358/" target="_blank">
                                        <img width="15px" src="https://img.finalfantasyxiv.com/lds/pc/global/images/favicon.ico?1490749553">
                                        Loadstone</td>

                                </tr>
                        </table>

                    </div>
                </div>
            </section>
            


</div>
</body>
</html>
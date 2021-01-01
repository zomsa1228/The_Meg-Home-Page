<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="ja">
<head>
<meta charset="utf-8">
    <title>Top Page</title>
    <meta name="author" content="Sam Norton">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic|Raleway:400,200,300,500,700,600,800,900' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body style="margin:10px">
<div class="form-group">
<form method="post" action="./update.php" style="margin:10px">
<textarea class="form-control" name="contents" cols="14" rows="20" maxlength="280">
  
<?php
// ファイルを読み込み専用でオープンする
$fp = fopen('write.txt', 'r');
// 終端に達するまでループ
while (!feof($fp)) {
  // ファイルから一行読み込む
  $line = fgets($fp);
  // 読み込んだ行を出力する
  print $line;
  // <br>の出力
  //print "&#13;";
}
// ファイルをクローズする
fclose($fp);
?>
</textarea>
<input style="margin-top:10px" class="form-control"  type="submit" value="更新">
</form>
<p>現在のテキストの内容</p>
<?php
// ファイルを読み込み専用でオープンする
$fp = fopen('write.txt', 'r');
// 終端に達するまでループ
while (!feof($fp)) {
  // ファイルから一行読み込む
  $line = fgets($fp);
  // 読み込んだ行を出力する
  print $line;
  // <br>の出力
  print "<br>\n";
}
// ファイルをクローズする
fclose($fp);
?>
</div>
</body>
</html>
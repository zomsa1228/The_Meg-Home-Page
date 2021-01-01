<?php
// ファイルを読み込み専用でオープンする
$fp = fopen('log.txt', 'r');
// 終端に達するまでループ
while (!feof($fp)) {
// ファイルから一行読み込む
$line = fgets($fp);
// 読み込んだ行を出力する
print $line;
// <br>の出力
print "<br>\n";
// <hr>の出力
print "<hr>\n";
}
// ファイルをクローズする
close($fp);
?>
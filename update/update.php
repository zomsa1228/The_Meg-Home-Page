<html>
<head>
<title>アップデート中</title>
<head>
<?php
error_reporting(E_ALL & ~E_NOTICE);

$contents = $_POST['contents'];
if ($contents) {
  $fp = fopen('write.txt', 'w');
  fputs($fp, $contents);
  fclose($fp);
  print "書き込み完了しました。";
}
?>
<script>
location.href="../index.html";
</script>
<body>
</body>
</html>
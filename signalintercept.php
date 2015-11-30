<?php
//ini_set('display_errors',1);  
//error_reporting(E_ALL);
date_default_timezone_set('Europe/Amsterdam');
$t = date('m/d/Y h:i:s a', time());
$t0="Data Received: ";
$from = $_POST['from'];
$to = $_POST['to'];
$plain_text = $_POST['plain'];
//header("Content-type: text/plain");
//header("HTTP/1.0 200 OK");
$b= '<center><textarea name="myTextBox" cols="100" rows="30" style="border:3px dashed #F7730E;">';
$eb="</textarea></center>";
$n = "</br>";
$k= "=============================================</br>";
$fromm="From: ";
$rtl1='<div dir="rtl">';
$rtl2="</div>";
$too = "To: ";
//It is a mess here I know, but I like messy stuff!
$content1 = $k.$n.$k.$n.$t0.$t.$n.$fromm.$from.$n.$too.$to.$n.$rtl1.$b.$plain_text.$eb.$rtl2.$n.$n.$n;
function writeUTF8File($filename,$content) {
        $f=fopen($filename,"a");
        # Now UTF-8 - Add byte order mark
        fwrite($f, pack("CCC",0xef,0xbb,0xbf));
        fwrite($f,$content);
        fclose($f);
}
writeUTF8File("index.php",$content1);
exit;
?>

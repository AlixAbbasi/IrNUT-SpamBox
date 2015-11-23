<?php
ini_set('display_errors',1);  
error_reporting(E_ALL);
$content = array();
$content[] = '<?php';
$content[] = 'session_start();';
$content[] = 'if( !isset( $_SESSION["UserData"]["Username"] ) ) {';
$content[] = '  header("Location: login.php");';
$content[] = '  exit;';
$content[] = '}';
$content[] = '?>';
// for better readability you can also split the html below, like I did with the HTML above
$content[] = '<!DOCTYPE html><html><head><title>IrNut Spambox</title></head><body><html dir="rtl"></html><form action="flushsink.php" method="get"><input type="submit" value="Flush!"></form>';

// implode array to string, glue will be a \n
$content = implode( "\n", $content );

function writeUTF8File($filename,$content) {
    $f=fopen($filename,"w");
    fwrite($f,$content);
    fclose($f);
}
writeUTF8File( "index.php", $content) ;
header('Location: index.php');// just changed the path to fit my test

?>
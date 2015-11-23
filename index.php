<?php
session_start();
if( !isset( $_SESSION["UserData"]["Username"] ) ) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html><html><head><title>IrNut Spambox</title></head><body><html dir="rtl"></html><form action="flushsink.php" method="get"><input type="submit" value="Flush!">
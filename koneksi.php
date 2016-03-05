<?php
$host="localhost";
$user="root";
$pass="";
$db="torangbatamang";

$konek= mysql_connect($host,$user,$pass) or die ('Koneksi gagal');
mysql_select_db($db);
?>

<?php
$host=getenv('OPENSHIFT_MYSQL_DB_HOST');
$user=getenv('OPENSHIFT_MYSQL_DB_USERNAME');
$password=getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
$database=('OPENSHIFT_GEAR_NAME');

if ($user==''){
	$user="adminSeC3tcL";
}
if ($password==''){
	$password="FqrJv7RQFSXM";
}
if($database==''){
	$database="myphpapp";
}
$koneksi= mysql_connect($host,$user,$password);
mysql_select_db($database,$koneksi);
//cek koneksi
if ($koneksi){
	echo "koneksi berhasil";
}
else{
	echo "koneksi gagal";
}
?>

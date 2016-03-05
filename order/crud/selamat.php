<?php
mysql_connect("localhost","root","");
mysql_select_db("test");

$id = $_POST['id'];
$nama = $_POST['nama'];

if($id != 0){

mysql_query("update biodata set nama='$nama' where id='$id'");

}else{

$sql=mysql_query("insert into biodata(nama)values('$nama')");

}
echo"<meta http-equiv='refresh' content='0; url=modal-form.php'>";

?>

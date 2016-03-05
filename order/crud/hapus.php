<?php

mysql_connect("localhost","root","12345");
mysql_select_db("test");

$id=$_POST['id'];

mysql_query("delete from biodata where id='$id'");

echo"<meta http-equiv='refresh' content='0; url=modal-form.php'>";

?>
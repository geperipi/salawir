<?php
	include_once('koneksi.php');
	$name= $_POST['name'];
	$email= $_POST['email'];
	$pesan= $_POST['pesan'];
	
	
	if(mysql_query("insert into pesan(nama,email,pesan,tanggal) values('$name','$email','$pesan',sysdate())"))
		echo "Message Successfully Inserted";
	else
		echo "Insertion Failed";
	
?>
<style>
body {
	
	font-family: 'Lato', sans-serif;
	font-size:14px;
	font-weight:normal;
	
}
</style>
<?php
$con=mysql_connect("localhost", "root", "");
if(!$con)
die("Tidak dapat melakukan koneksi ke server MySQL");
mysql_select_db("torangbatamang", $con);
?>
<?php
function getcomment(){
$commentquery = mysql_query("SELECT * FROM pesan ORDER BY id DESC limit 10") or die(mysql_error());
$commentNum = mysql_num_rows($commentquery);
echo "<br>";
echo"<style>
h4{
	font-family: 'LatoRegular';
	font-weight: 600;
	color:#ffffff;
	font-size:16px;
	margin:0 0 5px 0;
	text-transform:uppercase;
}
b{font-family: 'LatoRegular';
color:#ffffff;}</style>";
echo "<h4>" . "Current comment(s)..." . "</h4>";
echo "<b>" . $commentNum . " comment(s) so far. Leave a comment..." .
"</b>" . "<br />" . "<br />";
echo "<hr>";
while($row = mysql_fetch_array($commentquery))
 {
 echo "<b>" . $row['nama'] . "</b>" . " " . " | " . " " . "<i>" .
$row['tanggal'] . "</i>" . "<br />" . "<br />" . $row['pesan'] . "<br />";
 echo "<hr>";
 }
}
?>
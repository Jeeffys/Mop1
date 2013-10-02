<?php
ob_start();
$host = "localhost";
$username = "u402792_mop1";
$password = "Gluweb1";
$db_name = "u402792_mop1";

mysql_connect("$host", "$username", "$password")or die($error1);
mysql_select_db("$db_name")or die($error2);

$sql = mysql_query("SELECT * FROM gebruikers WHERE user_id = '".$_SESSION['id']."'");
$user_info = mysql_fetch_array($sql);
?>	
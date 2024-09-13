<?php
$dsn = "PPNAPASTO";
$user = "";
$passwd = "PpnaSMSPasto2017";
$conn = @odbc_connect($dsn,$user,$passwd);
$link = $conn;
if(!$conn) {
	print "Could not connect to database using DSN [vinculados_local]<br><br>Message(s):<br>" . odbc_error() . " - " . odbc_errormsg() . "<br>";
	exit ;
}
?>

<?php
DEFINE("host",'localhost');
DEFINE("user", 'MyXamppUser');
DEFINE("pass", 'helloXampp');
DEFINE("db", 'bossa_db');

$conn = mysqli_connect(host, user, pass, db);
// If you encounter this error:  The server requested authentication method unknown to the client
//Login to root and run the following command
//ALTER USER 'mysqlUsername'@'localhost' IDENTIFIED WITH mysql_native_password BY 'mysqlUsernamePassword';
if ($conn)
	echo "";
	//echo "Connection to MySQL successful!<br>";
else
	die("Unable to connect to MySQL: ". mysqli_connect_error() ."<br>");
?>
<?php

$dbhost = "localhost:8111";
$dbuser = "root";
$dbpass = "";
$dbname = "login_php_db";


if (!$con = mysqli_connect($dbhost,$dbuser, $dbpass ,$dbname))
{
	die("failed to connect!");
}

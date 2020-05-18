<?php

$servername = 'localhost:3308';
$username = 'root';
$password = '';
$dbname = 'ktbook';

$conn = mysqli_connect($servername , $username, $password, $dbname);
if (!$conn) {
	die("Connection_FAILED".' '.mysqli_connect_error());
}
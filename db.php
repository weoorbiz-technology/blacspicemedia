<?php
include_once('config.php');

if (DOMAIN == 'localhost') {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blacspicemedia";
} else if (DOMAIN == 'blacspicemedia.com' || DOMAIN == 'www.blacspicemedia.com') {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blacspicemedia";
} else if (DOMAIN == 'blacspice-media.web.app' || DOMAIN == 'www.blacspice-media.web.app') {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "blacspicemedia";
}

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_error) {
	die("Connection failed: " . $mysqli->connect_error);
}

?>
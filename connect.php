<?php
$connect = new mysqli(
	'localhost', // server
	'root', // user
	'', // password
	'parents', // database
	3306 // port
);

if($connect -> connect_error) {
	die('[WRN] ...');
}
?>
<?php
include_once('../connect.php');

$values = array(
	$_POST['name'],
	$_POST['lastname'],
	$_POST['genre']
);

$query = 'INSERT INTO parent(name, lastname, genre) VALUES(?, ?, ?)';
$result = $connect -> execute_query($query, $values);

if(!$result) {
	die('[WRN] ...');
}

echo '200';
?>
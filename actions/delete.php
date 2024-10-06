<?php
include_once('../connect.php');

$id = $_POST['id'];

$query = "DELETE FROM parent WHERE id=$id";
$result = $connect -> query($query);

if(!$result) {
	die('[WRN]: ...');
}

echo '200';
?>
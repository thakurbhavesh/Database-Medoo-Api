<?php

include("db.php");
$id=$_GET['id'];
$data = $database->delete("account", [
	"AND" => [
		
		"id" => $id
	]
]);
if ($data) {
    header('location:select.php');
} else {
    echo "no record deleted";
}


?>
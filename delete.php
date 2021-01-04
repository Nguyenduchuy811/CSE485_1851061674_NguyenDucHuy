<?php
    $id = $_GET['id'];
    $link = 'http://localhost:8080/';
	$conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "DELETE From `employees` where `id` = {$id}";
    mysqli_query($conn, $sql);
    header('Location:'.$link);
?>
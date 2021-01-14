<?php
	$id =$_GET['id'];
	$conn = mysqli_connect('localhost','root','','final_exam');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "DELETE From `thanks` where `id` = {$id}";
    mysqli_query($conn, $sql);
    $link = 'http://localhost:8080/cv_final_exam/';
	
    header('Location:'.$link);
?>


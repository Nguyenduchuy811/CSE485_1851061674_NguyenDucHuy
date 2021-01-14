<?php
    $val = $_POST;
    $name = $val['name'];
    $addr = $val['addr'];
    $sal = $val['salary'];
    $conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
    $sql = "INSERT INTO `employees`(`name`,`address`,`salary`) VALUES('{$name}','{$addr}', {$sal})";
    $que = mysqli_query($conn, $sql);
    if(!$que){
        echo "Lỗi!";
    }
    header('Location: http://localhost:8080/');
?>

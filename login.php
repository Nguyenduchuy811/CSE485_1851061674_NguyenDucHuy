<?php   
    session_start();

    
	// var_dump(password_hash('hello',PASSWORD_DEFAULT));
	
    $val = $_POST;
    $email = $val['email'];
    $pass = $val['pass'];
    $conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `user` where `email` = '{$email}'";
	$query = mysqli_query($conn, $sql);
    $result = mysqli_fetch_all($query);
    $item = $result[0];
    
    if(password_verify($pass, $item[3])){
        $_SESSION['email'] = $item[2];
        $_SESSION['name'] = $item[1];
		header('Location: /list.php');
	}else{
        $_SESSION['alert'] = "Tài khoản hoặc mật khẩu đăng nhập không đúng!";
		header('Location: /login_view.php');
	}

?>
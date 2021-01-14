<?php
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');	
	};

	$conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `employees`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	require 'header_admin_view.php';
?>
      <section>
	  	show bang list
	  </section>
<?php
	require_once 'footer_admin.php';
?>
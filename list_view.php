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


  <!-- sidebar-wrapper  -->
  <main class="page-content">
    <div class="container-fluid">
      <section>
	  	agfadfgdgad
	  </section>
      <footer class="text-center">
        
      </footer>
    </div>
  </main>

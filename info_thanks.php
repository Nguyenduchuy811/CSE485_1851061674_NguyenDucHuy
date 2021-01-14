
<?php
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');	
	};

	$conn = mysqli_connect('localhost','root','','final_exam');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `thanks`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	require 'header_admin_view.php';
?>
      <section>
   <?php foreach ($result as $row){ ?>
   <div class="container">
   <h2>Thông tin lời cảm ơn</h2>
   <ul class="list-group">
     <li>id: <?php echo $row["id"]?></li> 
     <li>Nội dung lời cảm ơn: <?php echo $row["content"]?></li>
     
   </ul>
   
   </div>
  
  <?php } ?>
 <a href="index_thanks.php" class="btn btn-danger"><i class="fas fa-backspace"></i>Back</a>
</div>
 
	  </section>
<?php
	require_once 'footer_admin.php';
?>
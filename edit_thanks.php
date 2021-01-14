
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

  <body>
    <div class="container">  
        <div class="card-header"><h1 class="text-center">Sửa lời cảm ơn</h1></div>
        <form class="card-body" method="POST" enctype="multipart/form-data" >   

            <div class="form-group">
                <label><h5>Mã lời cảm ơn</h5></label>
                <input type="text" class="form-control" name="id" value="<?php echo $row_data["id"];?>"/>          
            </div>
            
            <div class="form-group">
                <label><h5>Nội dung cảm ơn</h5></label>
                <input type="text" class="form-control" name="content" value="<?php echo $row_data["content"];?>"/>          
            </div>

            <button name="submit" class="btn btn-primary" type="submit"><i class="fas fa-save"></i>Lưu lại</button>
            <a href="index_thanks.php" class="btn btn-danger"><i class="fas fa-backspace"></i>Trở về</a>
        </form>   
    </div>
	  </section>
<?php
	require_once 'footer_admin.php';
?>
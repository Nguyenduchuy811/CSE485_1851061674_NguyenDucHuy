<?php 
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');
	};

	require 'header_admin_view.php';
?>
	  <section>
	  	<div class="container">
			<div class="row">
				<div class="form-input">
					<form action="http://localhost:8080/add.php" method="post">
						<div class="form-group">
						<label for="name">Tên</label>
						<input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nhập tên">
						</div>
						<div class="form-group">
						<label for="addr">Địa chỉ</label>
						<input type="text" class="form-control" name="addr" id="addr" aria-describedby="helpId" placeholder="Địa chỉ">
						</div>
						<div class="form-group">
						<label for="salary">Lương</label>
						<input type="num" class="form-control" name="salary" id="salary" aria-describedby="helpId" placeholder="Nhập lương">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</form>
                </div>
			</div>  
		</div>
	  </section>

<?php require_once "footer_admin.php" ?>
<?php 
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');
	};

	require 'header_view.php';
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
	  <footer>

	  </footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<link rel="stylesheet" href="/css/newcss.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
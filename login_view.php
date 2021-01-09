<?php
    session_start();
    if(isset($_SESSION['alert'])){
        $alert = $_SESSION['alert'];
        echo "<script type='text/javascript'>alert('$alert');</script>";
    }
    session_destroy();
    require 'header_personal_view.php';
?>
	  <section class="login_page_view">
	  	<div class="container">
			<div class="row">
				<div class="login_input_view form-input col-md-12">
					<form action="http://localhost:8080/login.php" method="post">
						<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Nhập Email" required>
						</div>
						<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="Địa Password" required>
                        </div>
						<a href="/" class="btn btn-primary active" role="button">Trang chủ</a>
						<button type="submit" class="btn btn-primary">Đăng nhập</button>
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
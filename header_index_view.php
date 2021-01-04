<!doctype html>
<html lang="en">
  <head>
	<title>Title</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="css/css.css">
  </head>
  <body>
	  <header>
	  	<nav class="navbar navbar-expand-sm navbar-light bg-light">
			<a class="navbar-brand" href="http://localhost:8080/">Trang danh sách</a>
			<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="collapsibleNavId">
				<ul class="navbar-nav mr-auto mt-2 mt-lg-0">
					<li class="nav-item active">
						<a class="nav-link" href="http://localhost:8080/">List <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://localhost:8080/addview.php">Thêm</a>
					</li>
				</ul>
				<ul class="login_nav navbar-nav ml-auto mr-0 mt-2 mt-lg-0">
					<?php
						if (!isset($_SESSION['email'])) {
					?>
						<li class="nav-item">
							<a class="nav-link" href="http://localhost:8080/login.php">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="http://localhost:8080/register_view.php">Register</a>
						</li>
					<?php
						}else{
					?>
						<li class="nav-item">
							<h3>Welcome <?php echo $_SESSION['name']?>!</h3>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="http://localhost:8080/logout.php">Logout</a>
						</li>
					<?php
						}
					?>
				</ul>
				<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="text" placeholder="Search">
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
			</div>
		</nav>
	  </header>
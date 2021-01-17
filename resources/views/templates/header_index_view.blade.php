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
	<link rel="stylesheet" href="{{('css/css.css')}}">
	<link rel="stylesheet" href="css/responsive.css">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
  </head>
  <body>
	  <header>
		<nav class="navbar navbar-expand-sm navbar-light bg-light navbar_header_index">
					
		  <div class="container">
				<div class="row">
					<a class="navbar-brand navbar_brand_index" href="http://localhost:8080/">CV</a>
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
						<!-- <form class="form-inline my-2 my-lg-0">
							<input class="form-control mr-sm-2" type="text" placeholder="Search">
							<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
						</form> -->
					</div>
				</div>
			</div>
		</nav>
	  	
	  </header>
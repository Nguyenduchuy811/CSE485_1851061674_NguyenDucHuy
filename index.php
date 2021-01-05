<?php
	session_start();

	$conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `employees`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	require 'header_index_view.php';
?>


	  <section class="index">
	  	<div class="banner_top">
			<div id="carouselId" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselId" data-slide-to="0" class="active"></li>
					<li data-target="#carouselId" data-slide-to="1"></li>
					<li data-target="#carouselId" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img src="image/1.jpg" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h3>Test</h3>
							<p>Test1</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="image/2.jpg" alt="Second slide">
						<div class="carousel-caption d-none d-md-block">
							<h3>Title</h3>
							<p>Description</p>
						</div>
					</div>
					<div class="carousel-item">
						<img src="image/3.jpg" alt="Third slide">
						<div class="carousel-caption d-none d-md-block">
							<h3>Title</h3>
							<p>Description</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>  
		</div>
		<div class="intro_index index_page">
			<div class="container">
				<div class="intro_index_title index_page_title">
					<h2>Giới thiệu chung</h2>
				</div>
				<div class="intro_index_list index_page_list">
					<div class="row">
						<div class="intro_index_item col-md-4 index_page_item">	
							về chúng tôi
						</div>
						<div class="intro_index_item col-md-4 index_page_item">	
							về chúng tôi
						</div>
						<div class="intro_index_item col-md-4 index_page_item">	
							về chúng tôi
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="info_group index_page">
			<div class="container">
				<div class="header_info_group index_page_title">
					<h2>Nhóm gồm</h2>
				</div>
				<div class="info_group_main index_page_list">
					<div class="owl_cal_info_group owl-carousel owl-theme owl-loaded">
						<div class="item">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
							  	<img src="image/8.jpg" alt="">
							</button>
						</div>
						<div class="item">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
							  	<img src="image/8.jpg" alt="">
							</button>
						</div>
						<div class="item">
							<!-- Button trigger modal -->
							<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modelId">
							  	<img src="image/8.jpg" alt="">
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="thank_you index_page">
			<div class="container">
				<div class="row">
					<div class="thank_left col-md-6 index_page_item">
						cảm ơn 1
					</div>
					<div class="thank_right col-md-6 index_page_item">
						cảm ơn 2
					</div>
				</div>
			</div>
		</div>
	  </section>
	  <!-- Modal -->
	  	<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
			<div class="modal-dialog modal_show_cv" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">
						<?php include 'personal_profile.php' ?>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	  <footer>
			design by huy béo
	  </footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<link rel="stylesheet" href="/css/newcss.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script>
		$('.owl_cal_info_group').owlCarousel({
			margin:30,
			responsive:{
				0:{
					items: 2,
				}
			}
		})
	</script>
  </body>
</html>
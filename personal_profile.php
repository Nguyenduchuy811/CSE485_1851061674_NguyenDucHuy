<?php
	// session_start();

	$conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `employees`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	// require 'header_personal_view.php';
?> 


	  <section class="cv_view">
			<div class="cv_main row">
					<div class="left_info col-md-4">
						<div class="left_info_nopad">
							<div class="left_avatar">
								<figure>
									<img src="image/1.jpg" alt="test1">
								</figure>
								<figcaption>
									<div class="header_intro">
										<h3>Profile</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
									</div>
								</figcaption>
							</div>
							<div class="left_contact">
								<div class="item_contact">
									<div class="row">
										<div class="icon_contact col-md-2">
											<i class="fal fa-map-marker-alt"></i>
										</div>
										<div class="info_contact col-md-10">
											<h4>Address</h4>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui,</p>
										</div>
									</div>
								</div>
								<div class="item_contact">
									<div class="row">
										<div class="icon_contact col-md-2">
											<i class="fal fa-phone-volume"></i>
										</div>
										<div class="info_contact col-md-10">
											<h4>Phone</h4>
											<p>1353405349</p>
										</div>
									</div>
								</div>
								<div class="item_contact">
									<div class="row">
										<div class="icon_contact col-md-2">
											<i class="fal fa-envelope-open-text"></i>
										</div>
										<div class="info_contact col-md-10">
											<h4>Enail</h4>
											<p>test@gmail.com</p>
										</div>
									</div>
								</div>
								<div class="item_contact">
									<div class="row">
										<div class="icon_contact col-md-2">
											<i class="fal fa-globe"></i>
										</div>
										<div class="info_contact col-md-10">
											<h4>Website</h4>
											<p>text.com</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="right_info col-md-8">
						<div class=" header_right_info">
							<h1>Your name here</h1>
							<p>asdfnsdnsdansgndsjna</p>
							<div class="underlined"></div>
						</div>
						<div class="right_item profile_right_info">
							<div class="hedaer_item_right profile_right_info_header">
								<h3>Profile</h3>
							</div>
							<div class="item_pro_right_info">
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>					
							</div>
						</div>
						<div class="right_item ex_right_info">
							<div class="hedaer_item_right ex_right_info_header">
								<h3>Experience</h3>
							</div>
							<div class="main_info">
								<div class="item_list_info item_ex_right_info">
									<div class="row">
										<div class="left_place left_item_ex col-md-3">
											<b>( 2019 - 2020 )</b>
										</div>
										<div class="right_item_ex col-md-9">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
										</div>
									</div>
								</div>
								<div class="item_list_info item_ex_right_info">
									<div class="row">
										<div class="left_place left_item_ex col-md-3">
											<b>( 2019 - 2020 )</b>
										</div>
										<div class="right_item_ex col-md-9">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
										</div>
									</div>
								</div>
								<div class="item_list_info item_ex_right_info">
									<div class="row">
										<div class="left_place left_item_ex col-md-3">
											<b>( 2019 - 2020 )</b>
										</div>
										<div class="right_item_ex col-md-9">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="right_item edu_right_info">
							<div class="hedaer_item_right ex_right_info_header">
								<h3>Education</h3>
							</div>
							<div class="main_info">
								<div class="item_list_info item_edu_right_info">
									<div class="row">
										<div class="left_place left_item_edu col-md-3">
											<b>( 2019 - 2020 )</b>
										</div>
										<div class="right_item_edu col-md-9">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
										</div>
									</div>
								</div>
								<div class="item_list_info item_edu_right_info">
									<div class="row">
										<div class="left_place left_item_edu col-md-3">
											<b>( 2019 - 2020 )</b>
										</div>
										<div class="right_item_edu col-md-9">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas maximus varius ante vestibulum lacinia. Duis eleifend auctor dui, eu lacinia sem pretium ac. Praesent nisi quam, aliquam eget lacus ut, mattis feugiat turpis. Pellentesque congue sapien sed placerat blandit. Donec commodo molestie leo eu tempus</p>						
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>  
	  </section>
	  <!-- <footer>

	  </footer> -->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<!-- <link rel="stylesheet" href="/css/newcss.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->
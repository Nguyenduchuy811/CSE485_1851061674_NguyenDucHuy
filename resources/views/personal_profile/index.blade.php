<?php
	// session_start();

	// $conn = mysqli_connect('localhost','root','','music');
	// if($conn == false){
	// 	header('Location: '. $linkerr);
	// };
	// $sql = "SELECT * FROM `employees`";
	// $query = mysqli_query($conn, $sql);
	// $result = mysqli_fetch_all($query);

	// require 'header_personal_view.php';
?> 

	  <section class="cv_view">
			<div class="cv_main row">
					<div class="left_info col-md-4">
						<div class="left_info_nopad">
							<div class="left_avatar">
								<figure>
									<img src="../image/<?php echo $member_cv[0]['image']?>" alt="test1">
								</figure>
								<figcaption>
									<div class="header_intro">
										<h3>Profile</h3>
										<div id="carouselId1" class="carousel slide" data-ride="carousel">
											<div class="carousel-inner" role="listbox">
												<?php
													foreach ($profile as $keypf => $valepf) {
														if($keypf == 0){
												?>
														<div class="carousel-item active"><p class="config_item"><?php echo $valepf['content']?></p></div>
												<?php
														}else{
												?>	
														<div class="carousel-item"><p class="config_item"><?php echo $valepf['content']?></p></div>
												<?php
														}
													}
												?>
											</div>
											<a class="carousel-control-prev" href="#carouselId1" role="button" data-slide="prev">
												<span class="carousel-control-prev-icon" aria-hidden="true"></span>
												<span class="sr-only">Previous</span>
											</a>
											<a class="carousel-control-next" href="#carouselId1" role="button" data-slide="next">
												<span class="carousel-control-next-icon" aria-hidden="true"></span>
												<span class="sr-only">Next</span>
											</a>
										</div>
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
											<p><?php echo $member_cv[0]['address']?></p>
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
											<p><?php echo $member_cv[0]['phone']?></p>
										</div>
									</div>
								</div>
								<div class="item_contact">
									<div class="row">
										<div class="icon_contact col-md-2">
											<i class="fal fa-envelope-open-text"></i>
										</div>
										<div class="info_contact col-md-10">
											<h4>Email</h4>
											<p><?php echo $member_cv[0]['email']?></p>
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
							<h1><?php  echo $member_cv[0]['first_name'].' '.$member_cv[0]['last_name'] ?></h1>
							<p>{{ $member_cv[0]['note']}}</p>
							<div class="underlined"></div>
						</div>
						<div class="right_item profile_right_info">
							<div class="hedaer_item_right profile_right_info_header">
								<h3>Profile</h3>
							</div>
							<div class="item_pro_right_info">
								<div id="carouselId" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner" role="listbox">
										<?php
											foreach ($profile as $keypfm => $valepfm) {
												if($keypfm == 0){
										?>
												<div class="carousel-item active"><p class="config_item"><?php echo $valepfm['content']?></p></div>
										<?php
												}else{
										?>	
												<div class="carousel-item"><p class="config_item"><?php echo $valepfm['content']?></p></div>
										<?php
												}
											}
										?>
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
						</div>
						<div class="right_item ex_right_info">
							<div class="hedaer_item_right ex_right_info_header">
								<h3>Experience</h3>
							</div>
							<div class="main_info">
								<?php
									foreach ($experience as $kex => $valex) {
								?>
										<div class="item_list_info item_ex_right_info">
											<div class="row">
												<div class="left_place left_item_ex col-md-3">
													<b>( <?php echo date('Y' , strtotime($valex['year_start']))?> - <?php echo date('Y' , strtotime($valex['year_end']))?> )</b>
												</div>
												<div class="right_item_ex col-md-9">
													<p><?php echo $valex['content'] ?></p>						
												</div>
											</div>
										</div>
								<?php
									}
								?>
							</div>
						</div>
						<div class="right_item edu_right_info">
							<div class="hedaer_item_right ex_right_info_header">
								<h3>Education</h3>
							</div>
							<div class="main_info">
							<?php
									foreach ($education as $keyedu => $valedu) {
								?>
										<div class="item_list_info item_edu_right_info">
											<div class="row">
												<div class="left_place left_item_edu col-md-3">
													<b>( <?php echo date('Y' , strtotime($valedu['year_start']))?> - <?php echo date('Y' , strtotime($valedu['year_end']))?> )</b>
												</div>
												<div class="right_item_edu col-md-9">
													<p><?php echo $valedu['content'] ?></p>						
												</div>
											</div>
										</div>
								<?php
									}
								?>
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
	<!-- <link rel="stylesheet" href="/css/newcss.css"> -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->
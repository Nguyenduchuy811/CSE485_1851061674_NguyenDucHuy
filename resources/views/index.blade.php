<!-- <?php
	// var_dump($thank_letter);die();
?> -->

  <section class="index">
	  	<div class="banner_top">
			<div id="banner_slide" class="owl-carousel owl-theme owl-loaded">
			<?php
				foreach ($banner as $keyb => $valueb) {
			?>	
					<div class="item">
						<img src="../image/<?php echo $valueb['image']?>" alt="First slide">
						<div class="carousel-caption d-none d-md-block">
							<h3>Test</h3>
							<p>Test1</p>
						</div>
					</div>
			<?php
				}
			?>
			</div>  
		</div>
		<div class="intro_index index_page">
			<div class="container">
				<div class="intro_index_title index_page_title">
					<h2>Giới thiệu chung</h2>
				</div>
				<div class="intro_index_list index_page_list">
					<div class="row">
						<div class="intro_index_item col-md-4">	
							<div class="index_page_item">
								<h3>Nhóm gồm</h3>
								<p class="left"> 1.Nguyễn Đức Huy<br>Mã sv:1851061674</p>
								<p class="left">2.Lê Thị Hoa<br>Mã sv:1851061368</p>
							</div>
						</div>
						<div class="intro_index_item col-md-4">	
							<div class="index_page_item">
								<h3>Học vấn</h3>
								<p>Sinh viên lớp: 60TH5</p>
								<p>Chuyên ngành:Công nghệ thông tin</p>
								<P>Trường: Đại học Thủy Lợi</P>
							</div>
						</div>
						<div class="intro_index_item col-md-4">	
							<div class="index_page_item">
								<h3>Giáo viên</h3>
								<p>Kiều Tuấn Dũng</p>
								<p>Dạy bộ môn: Công nghệ web</p>
								<p>Email: dungkt@tlu.edu.vn</p>
								<p>Làm việc tại </p>
							</div>
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
						<?php
							foreach ($member_cv as $keycv => $valuecv) {
						?>
							<div class="item">
								<!-- Button trigger modal -->
								<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-id="<?php echo $valuecv['id'] ?>" data-target="#modelId">
									<img src="../image/<?php echo $valuecv['image'] ?>" alt="">
								</button>
							</div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<div class="thank_you index_page">
			<div class="container">
				<div class="index_page_title">
					<h2>Lời cảm ơn</h2>
				</div>
				<div class="thank_slide owl-carousel owl-theme owl-loaded">
					<?php
						foreach ($thank_letter as $keyt => $value_thank) {
					?>
						<div class="item">
							<div class="index_page_list index_page_item"><?php echo $value_thank['content'] ?></div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<div class="contact_index index_page">
			<div class="container">
				<div class="row">
					<div class="contact_index col-md-12 index_page_title">
						<h2>Liên hệ</h2>
					</div>
					<div class="contact_index col-md-12 index_page_list">
						<div class="row">
							<div class="contact_index_phone col-md-4">
								<div class="index_page_item">
									<h3>Điện thoại</h3>
									<p><strong>Số 1: </strong>0964837791</p>
									<p><strong>Số 2: </strong>0977626821</p>
								</div>
							</div>
							<div class="contact_index_phone col-md-4">
								<div class="index_page_item">
									<h3>Email</h3>
									<p><strong>Email 1: </strong>nguyenduchuy@gmail.com</p>
									<p><strong>Email 2: </strong>lethihoa181299@gmail.com</p>
  								</div>
							</div>
							<div class="contact_index_phone col-md-4">
								<div class="index_page_item">
									<h3>Địa chỉ</h3>
									<p><strong>Address 1: </strong>Số nhà 5-Quang Trung-Hà Đông-Hà Nội</p>
									<p><strong>Address 2: </strong>175-Tây Sơn-Đống Đa-Hà Nội</p>
  								</div>
							</div>
						</div>
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
					<div class="modal-body" id="modal_show_cv_person">
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	  <footer class="footer_index_page">
			DESIGN BY GROUP 10
	  </footer>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<link rel="stylesheet" href="/css/newcss.css">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
	<script src="js/js.js"></script>
	<script src="js/ajax.js"></script>
  </body>
</html>
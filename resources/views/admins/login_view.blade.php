	  <section class="login_page_view">
	  	<div class="container">
			<div class="row">
				<div class="login_input_view form-input col-md-12">
					<form action="<?php echo URL::to('/loginaction'); ?>" method="post" class="login_view_form">
					@csrf
						<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Nhập Email" required>
						</div>
						<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" class="form-control" name="pass" id="pass" aria-describedby="helpId" placeholder="Địa Password" required>
                        </div>
						<a href="/" class="btn btn-primary active login_index_button" role="button">Trang chủ</a>
						<button type="submit" class="btn btn-primary login_view_submit">Đăng nhập</button>
					</form>
                </div>
			</div>  
		</div>
	  </section>
	  <footer>

	  </footer>
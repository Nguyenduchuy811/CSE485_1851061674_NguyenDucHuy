<?php
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');	
	};

	$conn = mysqli_connect('localhost','root','','music');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `employees`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	require 'header_view.php';
?>


	  <section>
	  	<div class="container">
			<div class="row">
				<div class="table_index col-md-12">
					<table class="table table-striped table-inverse table-responsive">
						<thead class="thead-inverse">
							<tr>
								<th>Mã nhân viên</th>
								<th>Tên nhân viên</th>
								<th>Địa chỉ</th>
								<th>Lương</th>
								<th>Ghi chú</th>
							</tr>
						</thead>
						<tbody>
							<?php
								foreach($result as $val){
							?>
								<tr>
									<td scope="row"><?php echo $val[0] ?></td>
									<td><?php echo $val[1] ?></td>
									<td><?php echo $val[2] ?></td>
									<td><?php echo $val[3] ?></td>
									<td>
										<ul>
											<li><a href="http://localhost:8080/update_view.php?id=<?php echo $val[0]?>"><i class="far fa-wrench"></i></a></li>
											<li><a href="http://localhost:8080/delete.php?id=<?php echo $val[0]?>"><i class="far fa-trash-alt"></i></a></li>
											<!-- <li><a href="http://localhost:8080/update_view.php?id=<?php echo $val[0]?>">SỬA</a></li>
											<li><a href="http://localhost:8080/delete.php?id=<?php echo $val[0]?>">XÓA</a></li> -->
										</ul>
									</td>
								</tr>
							<?php
								}
							?>
						</tbody>
					</table>
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
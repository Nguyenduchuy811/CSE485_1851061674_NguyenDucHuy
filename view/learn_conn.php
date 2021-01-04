<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SmartmealVN</title>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	
	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCAw3rbwpmZm30XVsRwYShLxsIgO_pfZpk&callback=initMap&libraries=&v=weekly" defer></script> -->

	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" href="../css/css.css">
	<link rel="stylesheet" href="../css/responsive.css">

	<script src="js/js.js"></script>
	<!-- <script>
		let map;

		function initMap() {
		map = new google.maps.Map(document.getElementById("map"), {
			center: { lat: -34.397, lng: 150.644 },
			zoom: 8,
		});
		}
	</script> -->
</head>
<body>
    <div class="mysql">
		<?php
			// 4 bước
			// B1: kết nối database server
			$connect_test = mysqli_connect('localhost','root','','music');
			if ($connect != 1) {
				// die('false');
			}else{
				// die('success');
			};

			//B2: khai báo truy vấn
			$sql = "SELECT ten_tloai FROM theloai Where ma_tloai = (Select ma_tloai from baiviet where )";
			$result = mysqli_query($connect_test, $sql);

			//B3: sử lý kết quả
			$users = mysqli_fetch_all($result);

			echo '<pre>';
			var_dump($users);
			echo '</pre>';


			//B4: đóng kết nối
			mysqli_close($connect);
		?>
	</div>
</body>
</html>
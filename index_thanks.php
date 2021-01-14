<?php
	session_start();
	if (!isset($_SESSION)) {
		header('Location: /login_view.php');	
	};

	$conn = mysqli_connect('localhost','root','','final_exam');
	if($conn == false){
		header('Location: '. $linkerr);
	};
	$sql = "SELECT * FROM `thanks`";
	$query = mysqli_query($conn, $sql);
	$result = mysqli_fetch_all($query);

	require 'header_admin_view.php';
?>
      <section>
            <div class="container">
            <table class="table">
            <h1 class="text-center">Danh Sách lời cảm ơn</h1>   
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nội dung lời cảm ơn</th>

                    <th colspan="3">Thao tác</th>
                </tr>
                </thead>
                <?php
                require("config.php");
                $conn = mysqli_connect('localhost','root','','final_exam');
                $sql = "SELECT * FROM `thanks`";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_assoc($result)) { 
                ?>
                <tbody>
                <tr>
                    <td><?php echo $row["id"];?></td>
                    <td><?php echo $row["content"];?></td>

                    <td><a href="edit_thanks.php?id=<?php echo $row['id'];?>" class="fas fa-user-edit"> </a></td>
                    <td><a href="delete_thanks.php?content=<?php echo $row['id'] ?>" class="fas fa-trash-alt"
                     onclick="return confirm('Bạn có chắc chắn muốn xóa?')"></a></td>
                    <td><a href="info.php?id=<?php echo $row["id"];?>" class="far fa-question-circle"></a></td>
                </tr>
                </tbody>
                <?php
                }
                ?>
            </table>
            </div>
        </section>
<?php
	require_once 'footer_admin.php';
?>
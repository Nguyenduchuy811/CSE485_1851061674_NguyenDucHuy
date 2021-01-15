<section>
    <div class="container">
    <table class="table">
    <h1 class="text-center">Danh Sách lời cảm ơn</h1>   
        <thead>
        <tr>
            <th>Id</th>
            <th>Tên</th>

            <th colspan="3">Thao tác</th>
        </tr>
        </thead>
        
        
        <tbody>
        <?php
        foreach ($users as $key => $value) { 
            ?>
        <tr>
            <td><?php echo $value["id"];?></td>
            <td><?php echo $value["lastname"];?></td>

            <td><a href="edit_thanks.php?id=<?php echo $value['id'];?>" class="fas fa-user-edit"> Sửa</a></td>
            <td><a href="delete_thanks.php?content=<?php echo $value['id'] ?>" class="fas fa-trash-alt"
                onclick="return confirm('Bạn có chắc chắn muốn xóa?')">Xóa </a></td>
            <td><a href="info.php?id=<?php echo $value["id"];?>" class="far fa-question-circle">Chi tiết</a></td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        
    </table>
    </div>
</section>
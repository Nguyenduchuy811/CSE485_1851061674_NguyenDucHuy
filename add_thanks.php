<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  </head>

  <body>
    <div class="container">  
        <div class="card-header"><h1 class="text-center">Thêm lời cảm ơn</h1></div>
        <form class="card-body" action="add_thanks_controller.php" method="POST" > 
            <div class="form-group">
                <label><h5>Mã lời cảm ơn</h5></label>
                <input type="text" class="form-control" name="id" value=""/>        
            </div>
            
            <div class="form-group">
                <label><h5>Nội dung</h5></label> 
                <input type="text" class="form-control" name="content" value=""/>          
            </div>

       <button name="submit" class="btn btn-primary" type="submit" onclick="return confirm('Thêm mới thành công!')"><i class="fas fa-save" ></i>Lưu lại</button>

            <a href="index.php" class="btn btn-danger"><i class="fas fa-backspace"></i>Trở về</a>
        </form>   
    </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery-3.5.1.min.js"></script>
  </body>
</html>
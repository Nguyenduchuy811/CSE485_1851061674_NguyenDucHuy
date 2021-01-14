<?php
        require("config.php");
            $id = $_POST["id"];
            $content = $_POST["content"];
            $sql = "INSERT INTO `users`(`id`, `content`) VALUES ('{$id}','{$content }')";
            mysqli_query($connect, $sql);
            header("location: http://localhost:8080/cv_final_exam/");
    ?>



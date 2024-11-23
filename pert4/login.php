<?php

    if(isset($_POST['email']) || isset($_POST['password'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        // echo $email;
        if ($email == 'admin@admin.com' && $password == 'admin'){
            header('Location: /ComPro/Login/dashboard.php');
        }else{
            echo "email atau password salah";
        }
    }
?>
<?php 
session_start();
include '../model/login.php';
include '../model/config.php';
       if(isset($_POST['dangnhap'])){
        $user_name=$_POST['username'];
        $pass=$_POST['pass'];
       $result=check_user($user_name,$pass);
        if(is_array($result)){
            $_SESSION['user_name']=$result;
             extract($_SESSION['user_name']);
            
             if($role == 1){
                header('location: ../admin/index.php');
             }
             else{
                header('location: ../index.php');
             }
           
        }
        else{
            $thongbao="Email hoặc pass sai, Vui lòng nhập lại!";
        }
        
       }


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-container {
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        border-radius: 8px;
        width: 400px;
    }

    .login-container h2 {
        text-align: center;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 95%;
        padding: 8px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .form-group button {
        width: 100%;
        padding: 10px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .form-group button:hover {
        background-color: #45a049;
    }
    </style>
</head>

<body>

    <div class="login-container">
        <h2>Đăng nhập</h2>
        <form method="post" action="login.php">
            <div class="form-group">
                <label for="username">Tên đăng nhập:</label>
                <input type="text" id="username" name="username" required >
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="pass" required>
            </div>

            <div class="form-group">
                <button type="submit" name="dangnhap">Đăng nhập</button>
            </div>
            <div class="form-group">
                <span style="color:red"><?php if(isset($thongbao)) echo $thongbao?> </span>
            </div>
        </form>
    </div>

</body>

</html>
<?php 
session_start();
require '../function.php';
if(isset($_POST['submit'])){
    if(Register()>0){
        echo "
            <script>
                alert('Register Berhasil');
            </script>
        ";
        $_SESSION['login-session']=true;
        header("Location:../index.php");
        exit;
    }else{
        echo "
            <script>
                alert('Register Gagal');
            </script>
        ";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/register.css">
        <title>Register</title>
    </head>
    <body>
        <div class="header">
            <a href=""><h2>TabelSiswa<span>.</span>Com</h2></a>
        </div>
        <!--Batas Header-->
        <div class="form">
            <h1 class="h1"><a href="" class="logo"><h2>TabelSiswa<span>.</span>Com</h2></a></h1>
            <form action="" method="POST">
                <ul>
                    <li>
                        <label for="name">Masukan Nama:</label>
                        <input type="text" name="nama" id="name" required autocomplete="off">
                    </li>
                    <li>
                        <label for="username">Masukan Username:</label>
                        <input type="text" name="username" id="username" required autocomplete="off">
                    </li>
                    <li>
                        <label for="password">Masukan Password:</label>
                        <input type="password" name="password_user" id="password" required autocomplete="off">
                    </li>
                    <li>
                        <button type="submit" name="submit">Register</button>
                    </li>
                </ul>
            </form>
            <p>if you have account,<a href="login.php" class="login">Login</a></p>
        </div>
    </body>
</html>
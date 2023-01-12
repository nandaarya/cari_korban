<?php
include '..\models\auth.php';
$user = new Auth();

if (isset($_POST['submit'])) {
    $user->logout();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user->login($username, $password);
}

if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 'error') {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Login</title>

</head>

<body>



<div class="login-card">
    <div class="avatar">
		<img src="https://svgshare.com/i/p3Y.svg" alt="Avatar">
	</div>
    <h2 class="text-center">Login Administrator</h2>
    <br>
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-submit">Login</button>
    </form>

    <!-- styling css -->
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100);

        body {
        background: #245786;
        display: flex;
        background-size: cover;
        font-family: 'Roboto', sans-serif;
        }

        .login-card {
            position: absolute;
            left: 38%;
            top: 25%;
            padding: 40px;
            width: 274px;
            background-color: #F7F7F7;
            overflow: hidden;
            color: #7a7a7a;
            border-radius: 10px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .login-card h2 {
        text-align: center;
        font-size: 1.3em;
        }

        .login-card input[type=text], input[type=password] {
            height: 44px;
            font-size: 16px;
            width: 100%;
            margin-bottom: 10px;
            -webkit-appearance: none;
            background: #fff;
            border: 1px solid #d9d9d9;
            border-top: 1px solid #c0c0c0;
            padding: 0 8px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            border-radius: 10px;
        }

        .login-card input[type=text]:hover, input[type=password]:hover {
            border: 1px solid #b9b9b9;
            border-top: 1px solid #a0a0a0;
            -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        }

        .login {
            text-align: center;
            font-size: 14px;
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            height: 36px;
            padding: 0 8px;
        }
        
        .login-card .avatar img {
            position: right;
            padding: 5px;
            margin: 0 45px;
        }

        .login-card .btn-submit{
            background-color: #245786;
            color: white;
            border-radius: 10px;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 16px;
            padding: 8px;
            width: 125px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
        }
        .login-card .btn-submit:hover{
            background-color: #0999C7;
            color: white;
        }

    </style>
</body>

</html>
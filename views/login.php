<?php
include '..\models\auth.php';
$user = new Auth();

if (isset($_POST['submit'])) {
    $user->logout();
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user->login($username, $password);
}

# menampilkan pesan error
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


    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:400,100);

        body {
        background: #245786;
        display: flex;
        /* -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover; */
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
            /* margin: 100px 500px 0px; */
            overflow: hidden;
            color: #7a7a7a;
            border-radius: 10px;
            font-size: 13px;
            background: #ececec;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }

        .login-card h2 {
        /* font-weight: 50; */
        text-align: center;
        font-size: 1.3em;
        }

        /* .login-card input[type=submit] {
            width: 100%;
            display: block;
            margin-bottom: 10px;
            position: relative;
            border-radius: 10px;
        } */

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

        /* .login-submit {
            border: 0px;
            color: #fff;
            text-shadow: 0 1px rgba(0,0,0,0.1); 
            background-color: #4d90fe;
        }

        .login-submit:hover {
            border: 0px;
            text-shadow: 0 1px rgba(0,0,0,0.3);
            background-color: #357ae8;
        } */

        /* .login-card a {
        text-decoration: none;
        color: #666;
        font-weight: 400;
        text-align: center;
        display: inline-block;
        opacity: 0.6;
        transition: opacity ease 0.5s;
        }

        .login-card a:hover {
        opacity: 1;
        }

        .login-help {
        width: 100%;
        text-align: center;
        font-size: 12px;
        } */
        
        .login-card .avatar img {
            position: right;
            padding: 5px;
            margin: 0 45px;
        }

        /* .login-card .btn, .login-card .btn:active {
            font-size: 16px;
            font-weight: bold;
            background: #70c5c0 !important;
            border: none;
            margin-bottom: 20px;
        }
        .login-card .btn:hover, .login-card .btn:focus {
            background: #50b8b3 !important;
        } */

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
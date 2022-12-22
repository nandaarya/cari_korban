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
    <title>Lapor</title>
</head>

<body>
    <form method="post">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Login</button>
    </form>
</body>

</html>
<?php
include '..\models\auth.php';
$auth = new Auth();
$auth->logout();

header('location:datahilang.php');
?>
<?php
include '..\models\auth.php';
$auth = new Auth();
$auth->logout();

# redirect to data hilang page
header('location:datahilang.php');
?>
<?php
if (! isset($_SESSION['role'])) {
    $_SESSION['role'] = 'Guest';
}

header("Location: views/datahilang.php");
?>
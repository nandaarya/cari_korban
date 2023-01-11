<?php
include '..\connection.php';

class Auth extends Connection
{
    private $conn;
    public function __construct()
    {
        $this->conn = $this->get_connection();

        session_start();
    }

    public function login($username, $password)
    {
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $bind = $this->conn->query($sql);
        $baris = $bind->fetch_object();
        if ($baris != null) {
            session_start();
            $_SESSION['role'] = $baris->role;
            header('location:..\views\datahilang.php');
        } else {
            header('location:..\views\login.php?msg=error');
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['role']);
    }
}
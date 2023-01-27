<?php
abstract class Connection
{
    // database account information (don't forget to change it for security reason)
    protected function get_connection()
    {
        $host = "localhost";
        $database = "carikorban";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
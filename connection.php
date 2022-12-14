<?php
abstract class Connection{
    protected function get_connection(){
        $host = "localhost";
        $database = "carikorban";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
<?php
trait Connection{
    public function get_connection(){
        $host = "localhost";
        $database = "korban";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
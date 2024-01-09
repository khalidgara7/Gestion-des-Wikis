<?php

class Connection
{
    private  $host = "localhost";
    private  $user = "root";
    private  $password = "";
    private  $bdname = "wiki";

    protected function connect()
    {
        $conn = 'mysql:host=' . $this->host . 'bdname=' . $this->bdname;
        $db = new PDO($conn, $this->user, $this->password);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $db;
    }
}
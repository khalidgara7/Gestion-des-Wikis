<?php

namespace App\Model;
require_once __DIR__ . '/../../Database/Configuration.php';
use PDO;
final class Connection
{
    private static $instance;
    private $PDO;

    private function __construct()
    {
        $dbHost = DB_HOST;
        $dbUser = DB_USERNAME;
        $dbPass = DB_PASSWORD;
        $dbName = DB_NAME;

        $DNS = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
        $this->PDO = new PDO($DNS, $dbUser, $dbPass);
        $this->PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public static function getInstance()
    {

        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getConnection()
    {
        return $this->PDO;
    }
}
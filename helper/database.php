<?php

class DB
{
    public $host = "localhost";
    public $dbname = "test";
    public $user = "kyawmgmgthu";
    public $password = "kyawmgmgthu789";
    public $pdo;

    public function __construct()
    {
        try {
            $pdo = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

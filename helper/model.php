<?php

require_once "database.php";

class Model
{
    protected $table;
    public function __construct()
    {
        DB::connect();
    }

    public function all()
    {
        return DB::$pdo->query("SELECT * FROM {$this->table}")->fetchAll(PDO::FETCH_OBJ);
    }
}

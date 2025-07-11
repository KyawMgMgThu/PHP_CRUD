<?php

require_once "database.php";

class Model
{
    protected $table;
    public function __construct()
    {
        DB::connect();
    }

    protected function query($sql, $params = [])
    {
        $statement = DB::$pdo->prepare($sql);
        $statement->execute($params);
        return $statement;
    }

    public function all()
    {
        $sql = "SELECT * FROM {$this->table}";
        $result = $this->query($sql);
        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function first($data)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = ?";
        $params = [$data];
        $result = $this->query($sql, $params);
        return $result->fetch(PDO::FETCH_OBJ);
    }

    public function create($data)
    {
        $columns = implode(", ", array_keys($data));
        $placeholders = ":" . implode(", :", array_keys($data));
        $sql = "INSERT INTO {$this->table} ($columns, created_at, updated_at) VALUES ($placeholders, now(), now())";
        $this->query($sql, $data);
    }

    public function update($data, $column)
    {
        $clause = "";
        foreach ($data as $key => $value) {
            $clause .= "$key = :$key, ";
        }
        $sql = "UPDATE {$this->table} SET $clause `updated_at` = NOW() WHERE `id` = :id";
        $data["id"] = $column;
        $this->query($sql, $data);
    }

    public function delete($column)
    {
        $sql = "DELETE FROM {$this->table} WHERE `id` = ?";
        $this->query($sql, [$column]);
    }
}

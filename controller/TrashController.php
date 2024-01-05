<?php

require_once "../helper/database.php";

class TrashConroller extends DB
{

    public function products()
    {
        $statement = $this->pdo->query("select*from products where deleted_at is not null");
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
}

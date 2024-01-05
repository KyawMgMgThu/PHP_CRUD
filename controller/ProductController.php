<?php

require_once "../helper/database.php";

class ProductController extends DB
{
    public function index()
    {
        $statement = $this->pdo->query("select * from products where deleted_at is null");
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }
    public function store($request)
    {
        try {
            $statement = $this->pdo->prepare("
                insert into products
                    (name,description,price,stock,category,created_at,updated_at)
                values
                    (:name,:description,:price,:stock,:category,now(),now());
            ");
            $statement->bindParam(":name", $request["name"]);
            $statement->bindParam(":description", $request["description"]);
            $statement->bindParam(":price", $request["price"]);
            $statement->bindParam(":stock", $request["stock"]);
            $statement->bindParam(":category", $request["category"]);

            if ($statement->execute()) {
                header("Location: http://localhost:8000/project/index.php");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function edit($id)
    {
        try {
            $statement = $this->pdo->prepare("select * from products where id = :id");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                $products = $statement->fetch(PDO::FETCH_OBJ);
                return $products;
            } else {
                throw new Exception("Error");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function update($id, $request)
    {
        try {
            $statement = $this->pdo->prepare("
               UPDATE products 
               SET 
               `name` = :name, `price` = :price, `stock` = :stock, `description` = :description, `category` = :category
               WHERE id = :id
            ");

            $statement->bindParam("id", $id);
            $statement->bindParam("name", $request["name"]);
            $statement->bindParam("price", $request["price"]);
            $statement->bindParam("stock", $request["stock"]);
            $statement->bindParam("category", $request["category"]);
            $statement->bindParam("description", $request["description"]);
            if ($statement->execute()) {
                header("Location: http://localhost:8000/project/index.php");
            } else {
                throw new Exception("Error while updating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function destory($id)
    {
        try {
            $statement = $this->pdo->prepare("
                update products set deleted_at = now() where id = :id;
            ");
            $statement->bindParam(":id", $id);
            if ($statement->execute()) {
                header("location: localhost:8000/project/index.php");
            } else {
                throw new Exception("Error while creating a new product!");
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}

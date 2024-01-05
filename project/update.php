<?php
require_once "../controller/ProductController.php";

$connect = new ProductController();
$connect->update($_GET['id'], $_POST);

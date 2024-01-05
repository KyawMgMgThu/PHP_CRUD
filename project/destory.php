<?php
require_once "../controller/ProductController.php";

$connect = new ProductController();

$connect->destory($_GET['id']);

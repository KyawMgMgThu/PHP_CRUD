<?php

require_once "../helper/database.php";
require_once "../model/Product.php";
require_once "../model/Category.php";
require_once "../helper/rediret.php";


class ProductController extends DB
{
    public function index()
    {
        $products = new Products();
        return $products->all();
    }
    public function create()
    {
        $categoryModel = new Category();
        return $categoryModel->all();
    }

    public function store($request)
    {
        $productModel = new Products();
        $productModel->create($request);
        redirect("/products");
    }

    public function edit($id)
    {
        $productModel = new Products();
        $product = $productModel->first($id);
        $categoryModel = new Category();
        $categories = $categoryModel->all();
        return ["product" => $product, "categories" => $categories];
    }

    public function update($request, $id)
    {
        $productModel = new Products();
        $productModel->update($request, $id);
        redirect("/products");
    }

    public function destroy($id)
    {
    }
}

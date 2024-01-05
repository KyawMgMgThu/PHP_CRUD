<?php
$categories = [
    [
        "id" => 1,
        "name" => "T-shirt",
    ],
    [
        "id" => 2,
        "name" => "Pant",
    ],
    [
        "id" => 3,
        "name" => "Shoes",
    ],
];

$products = [
    [
        "id" => 1,
        "brand" => "Gucci",
        "color" => "white",
        "price" => 70000,
        "category_id" => [1], 
    ],
    [
        "id" => 2,
        "brand" => "LV",
        "color" => "grey",
        "price" => 35000,
        "category_id" => [1], 
    ],
    [
        "id" => 3,
        "brand" => "Adidas",
        "color" => "white&black",
        "price" => 40000,
        "category_id" => [1], 
    ],
    [
        "id" => 4,
        "brand" => "OMG",
        "color" => "Dark",
        "price" => 45000,
        "category_id" => [1], 
    ],
    [
        "id" => 5,
        "brand" => "Levis",
        "color" => "blue",
        "price" => 50000,
        "category_id" => [2], 
    ],
    [
        "id" => 6,
        "brand" => "Puma",
        "color" => "Pink",
        "price" => 55000,
        "category_id" => [3], 
    ],
    [
        "id" => 7,
        "brand" => "CR7",
        "color" => "Red",
        "price" => 60000,
        "category_id" => [2], 
    ],
    [
        "id" => 8,
        "brand" => "Calvin Klein",
        "color" => "blue",
        "price" => 70000,
        "category_id" => [2],
    ],
    [
        "id" => 9,
        "brand" => "H&M",
        "color" => "black",
        "price" => 75000,
        "category_id" => [1], 
    ],
];

$search = "Calvin Klein";
$search_Data = [];

if ($search) {
    foreach ($products as $product) {
        if ($product["brand"] == $search) {
            $search_Data[] = $product;
        }
    }

    if (empty($search_Data)) {
        echo "<script>alert('No search data found!')</script>";
    } else {
        foreach ($search_Data as $product) {
            $category_ids = $product["category_id"];
            $product_categories = [];

            foreach ($categories as $category) {
                if (in_array($category["id"], $category_ids)) {
                    $product_categories[] = $category;
                }
            }

            $product["categories"] = $product_categories;
            echo json_encode($product);
        }
    }
} else {
    echo "<script>alert('No search data found!')</script>";
}
?>

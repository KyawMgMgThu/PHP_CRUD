<?php

$catogories = [
    [
        "id"=> 1,
        "name"=> "Shirts",
    ],
    [
        "id"=> 2,
        "name"=> "Pant",
    ],
    [
        "id"=> 3,
        "name"=> "Shoes",
    ]
];


$products = [
    [
        "id" => 1,
        "brand" => "Adidas",
        "color" => "blue",
        "price" => 30000,
        "catogory_id" => 3,
    ],
    [
        "id" => 2,
        "brand" => "LV",
        "color" => "white",
        "price" => 35000,
        "catogory_id" => 1,
    ],
    [
        "id" => 3,
        "brand" => "Gucci",
        "color" => "white&black",
        "price" => 40000,
        "catogory_id" => 1,
    ],
    [
        "id" => 4,
        "brand" => "OMG",
        "color" => "Dark",
        "price" => 45000,
        "catogory_id" => 1,
    ],
    [
        "id" => 5,
        "brand" => "Levis",
        "color" => "blue",
        "price" => 50000,
        "catogory_id" => 2,
    ],
    [
        "id" => 6,
        "brand" => "Puma",
        "color" => "Pink",
        "price" => 55000,
        "catogory_id" => 3,
    ],
    [
        "id" => 7,
        "brand" => "CR7",
        "color" => "Red",
        "price" => 60000,
        "catogory_id" => 2,
    ],
    [
        "id" => 8,
        "brand" => "Calvin Klein",
        "color" => "blue",
        "price" => 70000,
        "catogory_id" => 2,
    ],
    [
        "id" => 9,
        "brand" => "H&M",
        "color" => "black",
        "price" => 75000,
        "catogory_id" => 1,
    ],
];

$search = "Shirts";
$search_Data = [];

if($search)
{
    foreach($catogories as $catogory)
    {
    if($search == $catogory['name'])
    {
        array_push($search_Data,$catogory);
    }
    }
}else
{
    echo '<script>alert ("No search data found!") </script>';
}


foreach ($products as $product)
{
    for ($i = 0; $i < count($search_Data); $i++)
    {
        if ($product["catogory_id"] == $search_Data[$i]["id"])
        {
            array_push($search_Data[$i],$product);
        }
    }
}

echo json_encode($search_Data);







/* $catogory = [
    [
        "id"=> 1,
        "name"=> "Shirts",

        [
            "id" => 2,
            "brand" => "LV",
            "color" => "white",
            "price" => 35000,
            "catogory_id" => 1,
        ],
        [
            "id" => 3,
            "brand" => "Gucci",
            "color" => "white&black",
            "price" => 40000,
            "catogory_id" => 1,
        ],
        [
            "id" => 4,
            "brand" => "OMG",
            "color" => "Dark",
            "price" => 45000,
            "catogory_id" => 1,
        ],
        [
            "id" => 9,
            "brand" => "H&M",
            "color" => "black",
            "price" => 75000,
            "catogory_id" => 1,
        ],
    ],
    [
        "id"=> 2,
        "name"=> "Pant",

        [
            "id" => 5,
            "brand" => "Levis",
            "color" => "blue",
            "price" => 50000,
            "catogory_id" => 2,
        ],
        [
            "id" => 7,
            "brand" => "CR7",
            "color" => "Red",
            "price" => 60000,
            "catogory_id" => 2,
        ],
        [
            "id" => 8,
            "brand" => "Calvin Klein",
            "color" => "blue",
            "price" => 70000,
            "catogory_id" => 2,
        ],
    ],
    [
        "id"=> 3,
        "name"=> "Shoes",

        [
            "id" => 1,
            "brand" => "Adidas",
            "color" => "blue",
            "price" => 30000,
            "catogory_id" => 3,
        ],
        [
            "id" => 6,
            "brand" => "Puma",
            "color" => "Pink",
            "price" => 55000,
            "catogory_id" => 3,
        ],
    ]
]; */



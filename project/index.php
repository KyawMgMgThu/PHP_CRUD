<?php
require_once "../controller/ProductController.php";

$controller = new ProductController();
$products = $controller->index();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <div class="m-5">
        <h1 class="text-center">Product Table</h1>
        <div class="mb-1">
            <a href="create.php" class="btn btn-primary">Add+</a>
            <a href="../trash/products.php" class="btn btn-danger">Trash</a>
        </div>
        <table class="table table-striped table-dark fs-3 p-3">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">DESCRIPTION</th>
                    <th scope="col">PRICE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">CATEGORY</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <?php foreach ($products as $product) : ?>
                <tbody>
                    <tr>
                        <th scope="row"><?php echo $product->id; ?></th>
                        <td><?php echo $product->name; ?></td>
                        <td><?php echo $product->description; ?></td>
                        <td><?php echo $product->price; ?></td>
                        <td><?php echo $product->stock; ?></td>
                        <td><?php echo $product->category_id; ?></td>
                        <td class="d-none"><?php echo $product->created_at; ?></td>
                        <td class="d-none"><?php echo $product->updated_at; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $product->id; ?>" class="btn btn-danger">EDIT</a>
                            <a href="destory.php?id=<?php echo $product->id; ?>" class="btn btn-primary">DELETE</a>
                        </td>
                    </tr>
                </tbody>
            <?php endforeach; ?>
        </table>
    </div>

</body>

</html>
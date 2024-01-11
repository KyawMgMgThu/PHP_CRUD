<?php
require_once "../controller/ProductController.php";

$controller = new ProductController();

$products = $controller->edit($_GET["id"])["product"];
$categories = $controller->edit($_GET["id"])["categories"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="p-5">
    <div class="p-5 bg-danger-subtle shadow d-block">
        <h3 class="text-center">Create Product</h3>
        <form class="row g-3" action="update.php?id=<?php echo $products->id; ?>" method="POST">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input required type="text" name="name" value="<?php echo $products->name; ?>" class="form-control shadow-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label">Price</label>
                <input required type="price" name="price" value="<?php echo $products->price; ?>" class="form-control shadow-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label">Stock</label>
                <input required type="text" name="stock" value="<?php echo $products->stock; ?>" class="form-control shadow-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label">Category</label>
                <select required name="category_id" class="form-select form-select-lg mb-3 text-dark" aria-label=".form-select-lg example">
                    <?php foreach ($categories as $category) : ?>
                        <option value="<?php echo $category->id ?>" <?php if ($products->category_id == $category->id) {
                                                                        echo "selected";
                                                                    } ?>><?php echo $category->name ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-label">description</label>
                <textarea required name="description" class="form-control shadow-sm"><?php echo $products->description; ?></textarea>
            </div>
            <div class="d-flex col-12">
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                <div class="m-2">
                    <a href="index.php" class="btn btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
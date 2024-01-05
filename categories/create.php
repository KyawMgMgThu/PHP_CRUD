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
        <form class="row g-3" action="store.php" method="POST">
            <div class="col-md-6">
                <label class="form-label">Name</label>
                <input required type="text" name="name" class="form-control shadow-sm">
            </div>

            <div class="col-md-6">
                <label class="form-label">Price</label>
                <input required type="price" name="price" class="form-control shadow-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label">Stock</label>
                <input required type="text" name="stock" class="form-control shadow-sm">
            </div>
            <div class="col-md-6">
                <label class="form-label">Category</label>
                <input required type="text" name="category" class="form-control shadow-sm">
            </div>
            <div class="col-md-12">
                <label class="form-label">description</label>
                <textarea required type="text" name="description" class="form-control shadow-sm"></textarea>
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
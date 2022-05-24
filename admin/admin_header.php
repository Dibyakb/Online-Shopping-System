<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Panel</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./admin_dashboard.php">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/online_shopping_system/admin/admin_product.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/online_shopping_system/admin/admin_category.php">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/online_shopping_system/admin/admin_seller.php">Sellers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/online_shopping_system/admin/admin_customer.php">Customers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Transactions</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                    <li class="nav-item">
                        <form action="/online_shopping_system/logout.php" method="POST">
                            <button type="submit" name="logout_btn" class="btn btn-small btn-info">Logout</button>
                        </form>

                    </li>
                </ul>
            </div>
        </div>
    </nav>
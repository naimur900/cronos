<?php
session_start();

if (!isset($_SESSION["admin_name"])) {
    header("location: userSigninPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CRONOS | Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

</head>

<body>
    <!-- Navbar -->
    <!-- Navbar -->
    <navbar>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <h4>CRONOS</h4>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <!-- Starting, ending -->
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link active" aria-current="page" href="adminPanel.php">Admin Panel</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="btn btn-danger" class="nav-link" href="dbAdminSignout.php">Sign Out, <?= $_SESSION['admin_name']; ?> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </navbar>
    <!-- Main Tag-->
    <h6 class="text-center mt-4">Hello, <span class="text-secondary"><?= $_SESSION['admin_name']; ?></span></h6>
    <div class="text-center text-success mb-5"><small>Logged as Admin</small></div>


    <!-- Add Cars -->
    <div class="text-center carAdding mb-5">
        <h2>Add Parts</h2>
    </div>
    <div class="m-auto mb-5 d-flex justify-content-center">
        <div class="card p-5 border-addCar mb-5">
            <form action="dbAddCarByAdmin.php" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <input type="text" name='category' class="form-control" id="category" />
                        </div>
                        <!-- input finished -->
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="brand" class="form-label">Brand</label>
                            <input type="text" name='brand' class="form-control" id="brand" />
                        </div>
                        <!-- input finished -->
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="model" class="form-label">Model</label>
                            <input type="text" name='model' class="form-control" id="model" />
                        </div>
                        <!-- input finished -->
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" name='color' class="form-control" id="color" />
                        </div>
                        <!-- input finished -->
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="yearOfRelease" class="form-label">Compitable With</label>
                            <input type="text" name='compitable_with' class="form-control" id="yearOfRelease" />
                            <!-- <textarea class="form-control" id="address" rows="2" name='address'></textarea> -->
                        </div>
                        <!-- input finished -->
                        <!-- input started -->
                        <div class="mb-3">
                            <label for="price" class="form-label">Price (taka)</label>
                            <input type="text" name='price' class="form-control" id="price" />
                        </div>
                        <!-- input finished -->

                    </div>
                </div>

                <!-- input started -->
                <div class="mb-3">
                    <label for="thumbnail" class="form-label">Thumbnail Link <i class="fas fa-link"></i></label>
                    <input type="text" name='thumbnail' class="form-control" id="thumbnail" />
                </div>
                <!-- input finished -->
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary w-50">Submit</button>
                </div>
            </form>
        </div>
    </div>
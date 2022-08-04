<?php
    include 'config.php';
    $id = $_GET['id'];
    $search_query = "SELECT * FROM `products` WHERE id='$id'";
    $selectedData = mysqli_query($conn, $search_query);
    $row = mysqli_fetch_array($selectedData)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <!-- bootstrap-css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- fontawesome kit -->
    <script src="https://kit.fontawesome.com/d9f2e7b9eb.js" crossorigin="anonymous"></script>
    <!-- custon css link -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header class="banner-color d-flex justify-content-evenly">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container ">
                <a class="navbar-brand" href="#"><img src="assets/icons/Logo.png" alt="" width="300" height="40"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="addItems.php">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="register.html">Register</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <section>
        <div class="container-fluid row d-flex justify-content-center mt-5">
            <div class="col col-sm-8 col-lg-6 shadow p-3 rounded">
                <div>
                    <h3 class="text-center">Update Product</h3>
                    <div class='d-flex flex-column-reverse'>
                        <div>
                            <form action="updateAction.php" method="POST" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="product" value="<?php echo $row['name'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="price"
                                        value="<?php echo $row['price'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        name="description" value="<?php echo $row['description'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="image"
                                        required>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="flex justify-content-center">
                                    <button type="submit" class="btn btn-success text-white">Submit</button>
                                </div>
                            </form>
                        </div>
                        <div class='d-flex justify-content-end'>
                            <button class="btn btn-danger text-white"><?php
                            echo"
                            <a href='deleteAction.php?id=$row[id]'
                                    style='text-decoration: none; color:#ffffff;'>Delete this product</a>
                            ";
                            ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
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
        <div class="container-fluid row flex justify-content-center mt-5">
            <div class="col col-sm-8 col-lg-6 shadow p-3 rounded">
                <h3 class="text-center">Add Product</h3>
                <form action="addProductAction.php" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="product">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Price</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="price">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Image</label>
                        <input type="file" class="form-control" id="exampleInputPassword1" name="image">
                    </div>
                    <div class="flex justify-content-center">
                        <button type="submit" class="btn btn-secondary text-white">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </section>c
</body>

</html>
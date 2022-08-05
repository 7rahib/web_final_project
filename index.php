<?php
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<script>location.href = 'login.html'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Store</title>
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
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
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
                            <a class="nav-link" href="login.html">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>

                    </ul>
                </div>
            </div>

        </nav>
    </header>
    <section class="banner-color mb-5">
        <section class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-md-4 ">
                    <img class="img-fluid" src="assets/images/Group 33092.png" alt="" width="450" height="250">
                </div>
                <div class="col-lg-6 col-md-6">
                    <h1><span class="headline-color">Penguin</span><br>Fashion (Shoe Catalouge)</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus ipsum facere id quidem
                        accusantium. Beatae.</p>
                    <button class="btn btn-design"><i class="fas fa-shopping-cart me-2"></i><a
                            style='text-decoration: none; color: #ffffff' href='addItems.php'>Add
                            Shoes</a></button>
                </div>
            </div>
        </section>
    </section>

    <section>
        <h1 class="text-center">Showcase</h1>
        <div class="d-flex">
            <div id="carouselExampleControls" class="carousel slide w-50" data-bs-ride="carousel">
                <div class="carousel-inner ">
                    <div class="carousel-item active">
                        <img src="images/Mask Group.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Rectangle 38.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/Rectangle 39.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/image 5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="images/pngegg 1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="d-flex align-items-center text-center m-5">
                <h4 class="ms-3">A place to look for all your favourite <span class="fs-1">Shoes</span></h4>
                <img src="assets/icons/Logo.png" alt="" width="300" height="40">
            </div>
        </div>
    </section>

    <main>
        <section class="container-fluid mx-auto" id="products">
            <h2 class="text-center m-2">SHOES</h2>
            <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 g-4">
                <?php
                include 'showItems.php';
            ?>
                <div>
        </section>
        <section class="container mb-5 mt-5 mx-auto mx-3" id="about">
            <h1 class="text-center">About Us</h1>
            <div class="row d-flex justify-content-between ">
                <div class="col-lg-4 g-3 ">
                    <div>
                        <div class="d-flex align-items-center p-2 shadow-sm mb-5 rounded-3 ">
                            <div>
                                <img src="assets/icons/image 12.png " alt=" " width="80 " height="80 ">
                            </div>
                            <div class="ms-5 ">
                                <h5>Find the perfect fit</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-2 shadow-sm mb-5 rounded-3 ">
                            <div>
                                <img src="assets/icons/image 12.png " alt=" " width="80 " height="80 ">
                            </div>
                            <div class="ms-5 ">
                                <h5>Find the perfect fit</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-2 shadow-sm mb-5 rounded-3 ">
                            <div>
                                <img src="assets/icons/image 12.png " alt=" " width="80 " height="80 ">
                            </div>
                            <div class="ms-5 ">
                                <h5>Find the perfect fit</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 img-res ">
                    <img src="assets/icons/XMLID 1.png " alt=" " width="600 " height="350 ">
                </div>
            </div>
        </section>


        <section class="container-fluid w-50 mb-5" id="contact">
            <h1 class="text-center">Contact Us</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button class="btn btn-design "><i class="fas fa-shopping-cart me-2 "></i>Buy Now</button>

        </section>
    </main>
    <footer class="text-center">
        <small>©2022. Web Final Project. All rights reserved. Naimur Rashid Rahib.</small>
    </footer>



    <!-- js script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js "
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p " crossorigin="anonymous ">
    </script>
</body>

</html>
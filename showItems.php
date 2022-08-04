<?php
    include 'config.php';
    $search_query = 'SELECT * FROM `products`';
    $allData = mysqli_query($conn, $search_query);
    while($row = mysqli_fetch_array($allData)){
        echo "
        <div class='col'>
                    <div class='card h-100 p-3 shadow'>
                        <div>
                            <img src='$row[image]' class='card-img-top img-fluid' alt='...'>
                        </div>
                        <div class='card-body'>
                            <h5 class='card-title'>$row[name]</h5>
                            <p class='card-text'>$row[description]</p>
                        </div>
                        <div class='d-flex justify-content-between'>
                            <h2 class='headline-color'>$$row[price]</h2>
                            <button class='btn btn-design'><i class='fas fa-shopping-cart me-2'></i>Buy Now</button>
                        </div>
                    </div>
                </div>
        ";

    }
?>
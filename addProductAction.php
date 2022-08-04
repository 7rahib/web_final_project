<?php
    include 'config.php';

    $name = $_POST['product'];
    $price = $_POST['price'];
    $image = $_FILES['image'];
    $description = $_POST['description'];

    $imageLocation = $image['tmp_name'];
    $imageName = $image['name'];
    $image_des = "images/".$imageName;

    move_uploaded_file($imageLocation, $image_des);

    if($conn){
        $insert_query = "INSERT INTO `products`(`name`, `price`, `description`, `image`) VALUES ('$name','$price','$description','$image_des')";

        if (!mysqli_query($conn, $insert_query)) {
           echo "<script>alert('Error Uploading Files')</script>";
        }else{
            echo "<script>location.href='index.php'</script>";
        }
    }
?>
<?php
include'config.php';

$r_name = $_POST['name'];
$r_email = $_POST['email'];
$r_password = $_POST['password'];

$sql = "INSERT INTO web_final (id,name,email,password)
VALUES ('NULL','$r_name','$r_email','$r_password')";

if(mysqli_query($conn,$sql)==TRUE){
    echo "<script>location.href='login.html'</script>";
}
else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
<?php
include'config.php';

$l_email = $_POST['email'];
$l_password = $_POST['password'];


if($conn){
$sql = "SELECT * FROM web_final WHERE email='$l_email' AND password='$l_password'";
$result = $conn->query($sql);

if($result->num_rows>0){
    session_start();
    $_SESSION['username'] = $l_email;
    echo "<script>location.href='index.php'</script>";
}
else{
    echo "<script>alert('Password or Email do not match')</script>";
    echo "<script>location.href='login.html'</script>";
}

}
else{
    echo "<script>alert('You have used some unauthorized characters')</script>";
    echo "<script>location.href = 'login.html'</script>";
  }
?>
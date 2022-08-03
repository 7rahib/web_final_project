<?php
$serverName="localhost";
$userName="root";
$password="";
$dbName="web_final";

$conn=mysqli_connect($serverName,$userName,$password,$dbName);
if(!conn){
    die('Connection Failed'.mysqli_connect.error());
}

?>
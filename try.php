<?php
$servername="localhost";
$Firstname = "Firstname";
$Lastname = "Lastname";
$Email    = "Email";
$Category = "Category";
$Password="Password";

$conn=new mysqli($servername,$Firstname,$Lastname,$Email,$Category,$Password);
if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);
}
echo "connected";
?>
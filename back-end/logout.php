<?php 
session_start();

$conn= new mysqli("localhost","root","","test");
$id = $_SESSION['id'];
$conn->query("UPDATE user set status='0' where id='$id';");

session_destroy();
echo "<script> alert('You have been logout'); </script>";
echo "<script> location='login.php'; </script>";
?>
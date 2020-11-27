<?php 
    $conn= new mysqli("localhost","root","","test");

    if(isset($_POST["insertuser"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn->query("INSERT INTO user(id, username, password, status) VALUES(null, '$username', '$password', 0)");
    }
?>
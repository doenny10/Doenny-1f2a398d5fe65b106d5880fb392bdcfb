<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
</head>
<body>
    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username">

        <label for="password">Password: </label>
        <input type="password" name="password"> <br>

        <input type="submit" name="regis" id="regis" value="Registrasi">
    </form>
</body>
</html>

<?php 

    $conn= new mysqli("localhost","root","","test");

    if(isset($_POST["regis"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $conn->query("INSERT INTO user(id, username, password, status) VALUES(null, '$username', '$password', 0)");
        echo "<script> alert(".$username." berhasil didaftarkan !'); </script>";
        echo "<script> location='login.php'; </script>";
    }
?>
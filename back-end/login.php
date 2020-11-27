<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <form action="" method="POST">
        <label for="username">Username: </label>
        <input type="text" name="username">

        <label for="password">Password: </label>
        <input type="password" name="password"> <br><br>

        <input type="submit" name="login" id="login" value="Login">
    </form>
    <br>
    <button><a href="registrasi.php">Registrasi</a></button>
</body>
</html>

<?php 
session_start();

if(isset($_POST["login"])){
    $conn= new mysqli("localhost","root","","test");

    $username = $_POST['username'];
	$password = $_POST['password'];

	$ambil = $conn->query("SELECT * FROM user where username='$username' AND password ='$password';");

	$match = $ambil->num_rows;

	if ($match == 1){
        $_SESSION['user'] = $username;

        $akun = $ambil->fetch_assoc();
        $id = $akun['id'];
        $_SESSION['id'] = $id;
        
        $conn->query("UPDATE user set status='1' where id='$id';");
		echo "<script> alert('Welcome, ".$username."'); </script>";
		echo "<script> location='index.php'; </script>";
	}
	else{
		echo "<script> alert('Email / Password is wrong'); </script>";
		echo "<script> location='login.php'; </script>";
	}
}
?>
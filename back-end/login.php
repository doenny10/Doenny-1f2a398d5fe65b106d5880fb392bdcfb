<?php 
session_start();

if(isset($_POST["loginuser"])){
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
        echo "berhasil";
	}
	else{
		echo "gagal";
	}
}
?>
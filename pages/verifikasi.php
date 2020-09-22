<?php 
include "koneksi.php";
$user =$_POST['username'];
$pass =$_POST['password'];

$query ="SELECT * FROM user WHERE username='$user' AND password='$pass' ";
$sql =mysqli_query($con,$query);
$cek =mysqli_num_rows($sql);

if ($cek == true) {
	session_start();
	$_SESSION['user']=$user;
	header("location:admin.php");
}else{
	header("location:admin.php?logout=salah");
}
 ?>
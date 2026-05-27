<?php
session_start();
include '../config/db.php';

if($_POST){
$email=$_POST['email'];
$pass=$_POST['password'];

$res=$conn->query("SELECT * FROM admin WHERE email='$email'");
$user=$res->fetch_assoc();

if($user && password_verify($pass,$user['password'])){
$_SESSION['admin']=true;
header("Location: dashboard.php");
}else{
echo "Invalid Login";
}
}
?>

<form method="POST">
<input name="email" placeholder="Email">
<input name="password" type="password">
<button>Login</button>
</form>

<?php
include '../config/db.php';

$name=$_POST['name'];
$email=$_POST['email'];
$msg=$_POST['message'];

$conn->query("INSERT INTO inquiries(name,email,message)
VALUES('$name','$email','$msg')");
echo "Saved";
?>
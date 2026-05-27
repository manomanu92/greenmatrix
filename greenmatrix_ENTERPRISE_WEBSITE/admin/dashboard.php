<?php
session_start();
if(!isset($_SESSION['admin'])) die("Access denied");
echo "Enterprise Dashboard";
?>
<?php
session_start();
function is_logged(){
return isset($_SESSION['admin']);
}
?>
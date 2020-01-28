<?php
session_start();
if (isset($_GET['logout'])) {
	session_destroy();
    unset($_SESSION['user']);
    unset($_SESSION['acType']);
	header("location: index.php");
}




?>
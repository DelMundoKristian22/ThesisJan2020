<?php

if(count($_POST)>0) {
    require_once("dbConfig.php");
    $sql = "INSERT INTO accounts (email, password, fname, lname,midi, accountType) VALUES ('" . $_POST["email"] . "','" . $_POST["password"] . "','" . $_POST["fname"] . "','" . $_POST["lname"] . "','" . $_POST["midi"] . "','" . $_POST["actype"] . "')";
    mysqli_query($db,$sql);
    $current_id = mysqli_insert_id($db);
       if(!empty($current_id)) {
      $message = "New User Added Successfully";
}
}
header('location: home.php');


?>
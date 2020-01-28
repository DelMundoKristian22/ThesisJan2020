<?php
session_start();
include_once('dbConfig.php');
$email = $_SESSION['edited'];

if(isset($_POST['ufname']))
{
    if($_POST['ufname'] == null){

    }else{
    $temp = $_POST['ufname'];
    $query = "UPDATE accounts SET fname='$temp' WHERE email = '$email';";
    $results = mysqli_query($db, $query);
}
}

if(isset($_POST['ulname']))
{
    if($_POST['ulname'] == null){

    }else{
$temp = $_POST['ulname'];
$query = "UPDATE accounts SET lname='$temp' WHERE email = '$email';";
$results = mysqli_query($db, $query);
    }
}

if(isset($_POST['pwd']))
{

    if($_POST['pwd'] == null){

    }else{
    $temp = $_POST['pwd'];
    $query = "UPDATE accounts SET password='$temp' WHERE email = '$email';";
    $results = mysqli_query($db, $query);
    }


}


if(isset($_POST['actype']))
{

    if($_POST['actype'] == null){

    }else{
    $temp = $_POST['actype'];
    $query = "UPDATE accounts SET accountType='$temp' WHERE email = '$email';";
    $results = mysqli_query($db, $query);
    }


}
header("Location:home.php");







?>
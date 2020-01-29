<?php

session_start();

$email = $_POST["email"];
$password = $_POST["password"];
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$midi = $_POST["midi"];
$accountType = "Student";





$db = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b12a8f726f9b09', 'e6650e74', 'heroku_524f94403e88c36');




$counter = 0;
$i=0;
$sql = "select * from accounts";
$stmt1 = mysqli_query($db, $sql);


while($row = mysqli_fetch_array($stmt1)) { 
    
    $temps = $row['email'];
   // echo $temps . " ";
      
        
        if($email == $temps) {
           $counter = 1;

        }

        $i++;
        
    }

   
    
    


if ($counter == 0) {
     
    $query = "INSERT INTO accounts (email, password, accountType, fname, lname, midi) VALUES ('$email', '$password', 'Student', '$fname', '$lname', '$midi' );";
    mysqli_query($db, $query);
    header("Location:register.php");

}else {
     $_SESSION['error'] = "there is already a user registered with that email";
     header("Location:register.php");
}








?>
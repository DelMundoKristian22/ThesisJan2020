<?php
session_start();
$email = "";

$password = "";

$errors1 = "";

if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
}

$errors   = array(); 





$db = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b12a8f726f9b09', 'e6650e74', 'heroku_524f94403e88c36');

if (isset($_POST['button1'])) { 
	login();
}

function login() {
    global $db, $email, $errors, $password;
    
    if ($email == "") {
        array_push($errors, "Username is required");

        header('location: index.php');
	}
	
    
    if (count($errors) == 0) {
		$password = $password;
    }

    $query = "SELECT * FROM accounts WHERE email='$email' AND password='$password';";
    echo $query;
    $results = mysqli_query($db, $query);


    if (mysqli_num_rows($results) == 1) { 
       
        $accountT = mysqli_fetch_assoc($results);
        
        if ($accountT['accountType'] == "Admin") {
            $_SESSION["user"] = $accountT['lname'] . ", " . $accountT["fname"] . " " . $accountT["midi"];
            $_SESSION["success"]  = "You are now logged in";
            $_SESSION["acType"] = $accountT['accountType'];
			header('location: home.php');
        }
        else if ($accountT['accountType'] == "Department Chair")  {
            $_SESSION["user"] = $accountT['lname'] . ", " . $accountT["fname"] . " " . $accountT["midi"];
            $_SESSION["success"]  = "You are now logged in";
            $_SESSION["acType"] = $accountT['accountType'];
			header('location: home2.php');
        } 
        else{
            $_SESSION["user"] = $accountT['lname'] . ", " . $accountT["fname"] . " " . $accountT["midi"];
            $_SESSION["success"]  = "You are now logged in";
            $_SESSION["acType"] = $accountT['accountType'];
            $_SESSION["email"] = $accountT['email'];
			header('location: init.php');
        }
    }
    else {
         // array_push($errors, "Wrong username/password combination");
        $errors1 = "Wrong username/password combination";
        header('location: index.php');

    }
}
function error1() {
    global $errors1;

    echo "<div>";
    echo $errors1 . '<br>';
    echo "</div>";

}


function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
    }
}

?>
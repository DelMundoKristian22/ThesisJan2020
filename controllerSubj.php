<?php
session_start();
include_once('dbConfig.php');
$curriculum = $_SESSION["curriculum"];
$program = $_SESSION["program"];
$year = $_SESSION["ylevel"];
$status = $_SESSION["status"];
$sem = $_SESSION["sem"];
$email =  $_SESSION["email"];

    $query = "SELECT * FROM accounts WHERE email='$email';";
    $results = mysqli_query($db, $query);
    $accountT = mysqli_fetch_assoc($results); 

$fname = $accountT['fname'];
$lname = $accountT['lname'];    


echo $curriculum . " " . $program . " " . $year . " " . $status . " " . $sem . " " . $fname . " " . $lname ;

if ($curriculum == "2013") {
    if($year == "1st year"){
        if($sem == "First"){
            
       
          $eng = $_POST["ENG1"];
          $thy = $_POST["THY1"];
          $m101 = $_POST["MATH101"];
          $m102 = $_POST["MATH102"];
          $phl = $_POST["PHL105"];
          $valed = $_POST["VALED"];
          $ics101 = $_POST["ICS101"];
          $ics111 = $_POST["ICS111"];
          $pe1 = $_POST["PE1"];
          $nstp1 = $_POST["NSTP1"];


          $stmt = "INSERT INTO 2013cur (SID, Sem, CurYr, ENG1, THY1, MATH101, MATH102, PHL105, VALED, ICS101, ICS111, PE1, NSTP1, fname, lname) VALUES ('$email', '$sem', '$year', '$eng', '$thy', '$m101', '$m102', '$phl', '$valed', '$ics101', '$ics111', '$pe1', '$nstp1', '$fname', '$lname'  );";
          mysqli_query($db, $stmt);
            


        }
          }
            }

?>
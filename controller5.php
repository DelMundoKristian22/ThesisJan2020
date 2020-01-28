<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'accounttest');

if(isset($_POST['g1'])) {
            $i=0;
            $sql = "select * from 2013cur";
            $stmt1 = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($stmt1)) { 
                
                $temps = $row['SID'];
               // echo $temps . " ";
                if($_POST['g1']==$temps){
                    $_SESSION['gid'] = $temps;
                    echo $_SESSION['gid'];
                    header("Location:viewgr.php");        
                    
                }
               
                
                $i++;
            }
        }
		else {
        $_SESSION['error'] = 'Select checkbox to delete product.';
        header("Location:uploadpage.php");
    }



?>
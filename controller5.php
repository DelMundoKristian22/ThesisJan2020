<?php
session_start();
$db = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b12a8f726f9b09', 'e6650e74', 'heroku_524f94403e88c36');

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
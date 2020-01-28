<?php
    session_start();
    include_once('dbConfig.php');
    

    if (isset($_POST["selected_id"])) {
     // $all = implode(",", $_POST["selected_id"]);
	  
	  foreach($_POST["selected_id"] as $temp){
         // $temp = $array1[$i];
          echo $temp . "," ;
    
		  $stmt = "DELETE FROM accounts WHERE email='$temp';";
          $run = mysqli_query($db, $stmt);
     
      } 
   
     

      // foreach($_POST["selected_id"] as $selected){
        //echo $selected."</br>";
    // }

       //  $stmt="DELETE * FROM test WHERE userEmail = '$all'";
      //if($results){
          $_SESSION['success'] = 'Products have been deleted successfully.';
          header("Location:home.php");
     // }
    }elseif(isset($_POST['edit1'])) {
            $i=0;
            $sql = "select * from accounts";
            $stmt1 = mysqli_query($db, $sql);
            while($row = mysqli_fetch_array($stmt1)) { 
                
                $temps = $row['email'];
               // echo $temps . " ";
                if($_POST['edit1']==$temps){
                    $_SESSION['edited'] = $temps;
                    echo $_SESSION['edited'];
                    header("Location:edit.php");        
                    
                }
               
                
                $i++;
            }
        }
        else {
        $_SESSION['error'] = 'Select checkbox to delete product.';
        header("Location:home.php");
    }
 //    header("Location:index.php");
    

  

?>


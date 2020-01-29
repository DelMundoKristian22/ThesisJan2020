<?php session_start(); ?>
<?php 
    if(isset($_SESSION["user"])){
    } 
    else{
            header("location: index.php");
    }
    $account = $_SESSION["acType"];
    require_once("dbConfig.php");
    $sql = "SELECT * FROM heroku_524f94403e88c36 ORDER BY userId DESC";
    $stmt = mysqli_query($db,$sql);
?>
<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-family: "TW Cen MT";
}
.modal-content {
   position: fixed;
   left:650px;
   top: 60px;
}
.tbody{
   position:fixed;
    left:500px;
}
.close1{
    position:fixed;
    left:1000px;
}
.btnSubmit{
    position:fixed;
    left:850px;
}
.btn-primary{
    color:orange;
    

}

th{
    

    align:center;
  
  border-bottom: 2px solid #444444;
 
 
  border-top: 2px solid;
  border-right: 2px solid;
  border-left: 2px solid; 
   
   
   
}
td{

 
  
 border-bottom: 2px solid #444444;
  border-top: 2px solid;
  border-right: 2px solid;
  border-left: 2px solid; 

   
}
.tblSaveForm{
    position:relative;
    left:35px;
}
.txtField{
    width:100%;
}
.tblListForm{
    width: 75%;
    position:relative;
    left:-30%;

    
}
.butons{
    position:relative;
    left: 500px;
    bottom: 36px;
    z-index:1;
}
.buton2{
    position:relative;
    left:600px;
    bottom: 71px;
    z-index:1;
    
}
.btn-delete{
    position: relative;
    top: -10%;
}
.ss{
    width: 10%;
}
.mi{
    width: 10%;
}
.data th{
    color: red;
}
.outer-scontainer {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
    border-radius: 2px;
    
    position:fixed;
    left: 80px;
    height:100%;


}

.outer-scontainer table {
	border-collapse: collapse;
    width: 100%;
    position:relative;
    left:400px;
    bottom:50px;
    font-size: 18px;
}

.outer-scontainer th {
	border: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.outer-scontainer td {
	border: 1px solid #dddddd;
	padding: 8px;
    
}
</style>
<title>Manage Accounts</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="sidebar.css">

</head>

<body>

    <div id="wrapper">
            <div id="sidebar-wrapper" class="sidebardes">
                     <br/><br/><br/>
                     <div class="row" style="padding-left: 2rem;">
                     <div class="pt-1"><img src="avatar.png" class="avatars"></div> 
                     
                     <div class="pt-4" style="padding-left: 1rem;"><font class="namef"><?php
                     $name = $_SESSION["user"];
                     echo $name;
                     ?></font></div>
                    </div>
                     <br/> <br/><br/><br/>
                     <?php
                     
                     if($account == "Admin") {

                 ?>
                  <ul class="sidebar-nav">
                         <li><div style="background-color:rgb(31, 30, 29);"><a href="#">View Accounts</a></div></li>
                         <li><a href="adminsummary.php">View Summaries</a></li>
                         <li><a href="graphs.php">View Graphs</a></li>
                    </ul>
                <?php
                
                     } else {
                ?>
                <ul class="sidebar-nav">
                       
                         <li><a href="home2.php">View/Upload Files</a></li>
                         <li><a href="graphs.php">View Graphs</a></li>
                </ul>
                <?php
                     }
                
                ?>
                    <br/> <br/><br/><br/>
                    <br/> <br/><br/><br/>
                    <br/> <br/><br/><br/>
                    <br/> <br/>
                    <form action="controller2.php" method="GET">        
                           <div class="row" style="padding-left: 2rem;">
                            <div class="pt-1"><img src="logout.png" class="avatars"></div> 
                            
                            <div class="pt-4" style="padding-left: 1rem;"><button type="submit" name="logout" id="logout" class="namef" value="Logout" style="padding: 0; border: none; background: none;">Logout</button></div>
                           </div></form>
            </div>

    <div id="page-content-wrapper">
        <div class="container-fluid header1">

                <div class=" row" style="min-height: 192px; max-height: 192px; min-width: 1800px; max-width: 1800px;">
                      <!-- <div class="col-lg-1 pt-5" style="padding-left: 6rem;">
                                
                        </div> -->
                        <div class=" pt-3" style="min-width: 1800px; max-width: 1800px; padding-left: 6rem; width: 1800px; min-height: 192px; max-height: 192px;">
                            
                                
                                &nbsp; &nbsp; &nbsp; &nbsp; 
                                <img src="usn7.png" class="headimg3">
                                 <img src="ust3.png" class="headimg4">
                                 <img src="iics3.png" class="headimg5">
            
                        </div>
                    
                        
     
                   <!--      <div class="col-lg-12" style="height: 2rem; width: 100%;">
                        
                        </div>    



                                       <div class="col-lg-3  " style="padding-left: 4%;">
                                            &nbsp; &nbsp; &nbsp;
                                            <a href="#" id="menu-toggle"><img src="burgerbtn.png" class="burgerbtnsize"></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            
                                            <img src="ust.png" class="log">
                                        </div>
                                        <div class="col-lg-6 " >
                                                <img src="textlogo.png" class="br1">
                                        </div>
                                        <div class="col-lg-3 text-center" style="padding-left: 4%;">
                                                <img src="iics.png" class="log2">                   
                                        </div> -->
                                                       
                    </div>
        </div>
                
                        <div class="row" style="min-width: 2065px; max-width: 2065px;">
                                <div class="border1" style="min-width: 2065px; max-width: 2065px;">
                      
                                </div>
                             
                        <div class="col-lg-4"></div> 
                        <div class = "outer-scontainer">
                        <div class="col-lg-8">
                        
                        
                           <br><br><br>
                           <table border="0" cellpadding="10" cellspacing="1" width="550" class="tblListForm">
                           <tr class="listheader">
                           <!-- <form name="actionForm" action="action.php" method="POST" onsubmit="return deleteConfirm();"> -->
	
		
                        
<?php
            $sql = "select * from accounts";
            $stmt = mysqli_query($db, $sql);
            
            if (mysqli_num_rows($stmt) > 0) {
                ?>
                
		<form name="actionForm" action="action.php" method="POST" onsubmit="return deleteConfirm();">
            <table id='userTable'>
            <thead>
                <tr>
                <th  class = "ss"><input type="checkbox" name="check_all" id="check_all" value=""/>Check All</th>
			<th  style="width:500px">Email</th>
			<th  style="width:500px">First Name</th>
			<th  style="width:500px">Last Name</th>
            <th  style="width:500px">Middle Initial</th>
            <th  style="width:500px">Account Type</th>

                </tr>
            </thead>
<?php
                
                while ($row = mysqli_fetch_array($stmt)) {
                    ?>
                    
                <tbody>
                <tr>
				
                <td  align="center"><input type="checkbox" name="selected_id[]" class="checkbox" value="<?php echo $row['email']; ?>"/></td>  
<td  class = "tbl"><?php echo $row["email"]; ?></td>
<td  class = "tbl" ><?php echo $row["fname"]; ?></td>
<td  class = "tbl"><?php echo $row["lname"]; ?></td>
<td  class = "tbl"><?php echo $row["midi"]; ?></td>
<td  class = "tbl"><?php echo $row["accountType"]; ?></td>
<td  class = "tbl"><button type="submit" class="btn btn-primary" name="edit1" id="edit1" value="<?php echo $row['email']; ?>">Edit</button></td>

                </tr>
                    <?php
                }
                ?>
                </tbody>
     
    
            </div>
        <?php } ?>
  
<script type="text/javascript">


function deleteConfirm(){
    var result = confirm("Do you really want to make changes?");
    if(result){
        return true;
    }else{
        return false;
    }
}
$(document).ready(function(){
    $('#check_all').on('click',function(){
        if(this.checked){
            $('.checkbox').each(function(){
                this.checked = true;
            });
        }else{
             $('.checkbox').each(function(){
                this.checked = false;
            });
        }
    });
    
    $('.checkbox').on('click',function(){
        if($('.checkbox:checked').length == $('.checkbox').length){
            $('#check_all').prop('checked',true);
        }else{
            $('#check_all').prop('checked',false);
        }
    });
});



</script>


</table>
<div class = "butons"><input type="submit" class="btn btn-primary" name="btn_delete" value="Delete"/></div>

</form>
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
                       
                        <div class ="buton2" align="left"  style="padding-bottom:5px;"><button class="btn btn-primary" id="addbtn" name ="addbtn"> Add User</button>

             
                
                        </div>
                        
</div>

                        </div>        
                               
                               
                        </div>
    </div>


</div>

    </div>
   
<script>
        //  $("#menu-toggle").click(  function(e){
        //   e.preventDefault();
        //   $("#wrapper").toggleClass("menuDisplayed");
});
 </script>


<div class="modal " id="myModal" role="dialog" style="padding-top: 10rem;" style="margin: none;" >


      <div class="modal-content" style="width: 700px;  margin: none; border: none; padding: 0%;">
       <div class="modal-header" style="width: 700px; background-image:  url('upscaled.JPG');  background-repeat: no-repeat; background-color: yellow;">
         <h1 class="modal-title " style="color: white;">Add User</h1>

    
       </div> 
       <div class="modal-body">
        <!-- add start-->
       

<form name="frmUser" method="post" action="controller3.php">
<div style="width:200px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>

<table border="0" cellpadding="10" cellspacing="0" width="600px" align="center" class="tblSaveForm">

<tr>
<td ><label>Email</label></td>
<td><input type="text" name="email" class="txtField" required></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="password" name="password" class="txtField" required></td>
</tr>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="fname" class="txtField" required></td>
</tr>
<tr>
<td><label>Last Name</label></td>
<td><input type="text" name="lname" class="txtField" required></td>
</tr>
<tr>
<td><label>Middle Initial</label></td>
<td><input type="text" name="midi" class="txtField" required></td>
</tr>
<tr>
<td><label>Account Type</label></td>
<td>
<select name="actype">
<option value="Admin">Admin </option>
<option value="Department Chair">Department Chair</option>
<option value="Student">Student</option>
</select>
</td>
</tr>




</tr>
</table><br>
<input type="submit" name="submit" value="Submit" class="btnSubmit btn btn-primary" style="width: 8rem;"> &nbsp; 
&nbsp; &nbsp;
<button type="button" class="close1 btn btn-primary" data-dismiss="modal" style=" color: white; width: 8rem;">Close</button>
</div>
</form>





        <!-- add end-->
       </div>
        
       
      </div>
      
 
  </div>
  
</div>

<script>
var modal = document.getElementById("myModal");
var btn = document.getElementById("addbtn");
var span = document.getElementsByClassName("close1")[0];
btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}       
</script>

</body>
</head>
</html>

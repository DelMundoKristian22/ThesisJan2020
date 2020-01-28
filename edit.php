<?php session_start(); ?>
<?php 
    if(isset($_SESSION["user"])){
    } 
    else{
            header("location: index.php");
    }
   
?>
<!DOCTYPE html>
<html>
<head>
<style>

<style type="text/css">
.form-style-6{

	max-width: 400px;
	margin: 10px auto;
	padding: 16px;
    background: #F7F7F7;
    position:relative;
    left:-400px;
    bottom: -70px;
}
.form-style-6 h1{
	background: #ff3232;
	padding: 10px 0;
	font-size: 140%;
	font-weight: 300;
	text-align: center;
	color: #ffff;
    margin: -8px -8px -8px -8px;
    position:relative;
    left:-520px;
    bottom: -70px;
}
.form-style-6 input[type="text"],
.form-style-6 input[type="password"],
.form-style-6 input[type="date"],
.form-style-6 input[type="datetime"],
.form-style-6 input[type="email"],
.form-style-6 input[type="number"],
.form-style-6 input[type="search"],
.form-style-6 input[type="time"],
.form-style-6 input[type="url"],
.form-style-6 textarea

{


	width: 100%;
	background: #fff;
	margin-bottom: 1%;
	border: 1px solid #ccc;
	padding: 2.3%;
	color: #555;
    font: 95%;
    position:relative;
    left:-520px;
    bottom: -90px;
    height: 25%;
    font-family: "TW Cen MT";

}
.form-style-6 select 
{
    width: 100%;
	background: #fff;
	margin-bottom: 1%;
	border: 1px solid #ccc;
	padding: 2.3%;
	color: #555;
    font: 95%;
    position:relative;
    left:-520px;
    bottom: -90px;
    height: 25%;
    font-family: "TW Cen MT";
}
/* .form-style-6 input[type="text"]:focus,
.form-style-6 input[type="password"]:focus,
.form-style-6 input[type="date"]:focus,
.form-style-6 input[type="datetime"]:focus,
.form-style-6 input[type="email"]:focus,
.form-style-6 input[type="number"]:focus,
.form-style-6 input[type="search"]:focus,
.form-style-6 input[type="time"]:focus,
.form-style-6 input[type="url"]:focus,
.form-style-6 textarea:focus,
.form-style-6 select:focus
{

	
    border: 1px solid #43D1AF;
    position:relative;
   left:-500px;
   bottom: -70px;
   height: 25%;
} */

.btn-primary{

	width: 15%;
    position:relative;
    left: 50px;
    bottom: -100px;
	background: #43D1AF;
	border-bottom: 2px solid #30C29E;
	border-top-style: none;
	border-right-style: none;
	border-left-style: none;	
	color: #fff;
}
.form-style-6 input[type="submit"]:hover,
.form-style-6 input[type="button"]:hover{
    background: #2EBC99;
    position:relative;
    left:-500px;
    bottom: 500px;
}

/* body {
	font-family: Arial;
	
}

.outer-scontainer {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}

.input-row {
	margin-top: 0px;
	margin-bottom: 20px;
}

.btn-submit {
	background: #333;
	border: #1d1d1d 1px solid;
	color: #f0f0f0;
	font-size: 0.9em;
	width: 100px;
	border-radius: 2px;
	cursor: pointer;
}

.outer-scontainer table {
	border-collapse: collapse;
    width: 50%;
    align
    
}

.outer-scontainer th {
   
    border-right: 1px solid;
    border-left: 1px solid;
    border-top: 1px solid;
    border-bottom: 1px solid;
	padding: 8px;
	text-align: center;
}

.outer-scontainer td {
	border: 1px solid #dddddd;
    padding: 8px;
    
    border-right: 1px solid;
    border-left: 1px solid;
    border-top: 1px solid;
    border-bottom: 1px solid;
	text-align: center;
}

#response {
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 2px;
    display:none;
}

.success {
    background: #c7efd9;
    border: #bbe2cd 1px solid;
}

.error {
    background: #fbcfcf;
    border: #f3c6c7 1px solid;
}

div#response.display-block {
    display: block;
}
table{
  
}
.outer-scontainer
{
    position:relative;
    left: -350px;
    width: 1000px;

}
h1{
    position:relative;
    left: 70px;
}
.sort{
    position:relative;
   
    
}
input[type ="text"]{
width:70%;
}
input[type ="password"]{
width:70%;
}
.btn{
    position:relative;
    left: 450px;
} */
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
                    <ul class="sidebar-nav">
                             <li><div style="background-color:rgb(31, 30, 29);"><a href="#">View Accounts</a></div></li>
                             <li><a href="#">View Summaries</a></li>
                             <li><a href="#">View Graphs</a></li>
                    </ul>
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
                            
                               
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
                        <div class="col-lg-8">
                        <?php

include_once('dbConfig.php');
$email = $_SESSION['edited'];
$query = "SELECT * FROM accounts WHERE email='$email';";
$results = mysqli_query($db, $query);
$accountT = mysqli_fetch_assoc($results);

?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
</head>
<body>
<div class="form-style-6">
<h1>Edit User: <?php echo $email?> </h1>
<form method="POST" action="controller4.php">
<input type="text" id = "ufname" name="ufname" placeholder="Last Name"  required/>
<input type="text" id="ulname" name="ulname"  placeholder="First Name"  required/>

<select name="actype" class = "field4">
    
<option value="Admin">Admin </option>
<option value="Department Chair">Department Chair</option>
<option value="Student">Student</option>
</select>
<button type="submit" class="btn btn-primary" name="edit1" id="edit1">Save</submit>
</form>
</div>
<!-- <h1>Edit user</h1> -->

<!-- 
<form method="POST" action="controller4.php">
<div class ="outer-scontainer">
<table  align = "center" class ="edit">
<tr>
<td>First Name </td>

</tr>
<tr>

<td><input type="text" id="ufname" name="ufname" required></td>
</tr>
<tr>
<td>Last Name</td>

</tr>
<tr>

<td><input type="text" id="ulname" name="ulname" required></td>
</tr>
<tr>
<td>Password</td>

</tr>
<tr>

<td><input type="password"   required></td>
</tr>
<tr>
<td>Account Type</td>
<tr>
<td><select name="actype">
    
<option value="Admin">Admin </option>
<option value="Department Chair">Department Chair</option>
<option value="Student">Student</option>
</select></td>
</tr>

</table>
<br>
<button type="submit" class="btn btn-primary" name="edit1" id="edit1">Save</submit>
</form>
</div> -->
</body>
</html>
                        
                        
                        
                        
                        
                        
                        
                        </div>
                        
                        
  </div>
</div>



<script>
function saveConfirm(){
    var result = confirm("Do you really want to make changes?");
    if(result){
        return true;
    }else{
        return false;
    }
}

         $("#menu-toggle").click(  function(e){
          e.preventDefault();
          $("#wrapper").toggleClass("menuDisplayed");
});
 </script>
</body>
</head>
</html>

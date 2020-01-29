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
table{
text-align:center;
font-family: "TW Cen MT";
}
.outer-scontainer {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}
.outer-scontainer table {
	border-collapse: collapse;
        width: 70%;
        height: 80%;
        position:relative;
        left: 200px;
        bottom: -50px;
}

.outer-scontainer th {
   
    border-bottom:0.5px solid;
    border-top:0.5px solid;
    border-left:0.5px solid;
    border-right:0.5px solid;
	padding: 8px;
	text-align: left;
}

.outer-scontainer td {
	border: 1px solid #dddddd;
    padding: 8px;
    border: 1px solid #dddddd;
    border-bottom:0.5px solid;
    border-top:0.5px solid;
    border-left:0.5px solid;
    border-right:0.5px solid;
	text-align: left;
}
.outer-scontainer
{
    position:relative;
    width: 50%;
    height: 50%;
    left: 200px;
    bottom: -100px;
  
}
.outx {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}
.outx {
	border-collapse: collapse;
	width: 20%;
}

.outx th {
	border: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.outx td {
	border: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}
.outx
{
    position:relative;
    left: -250px;
}
h3{
        font-family:"TW Cen MT";
    position: relative;
left: 210px;
top: -400px;}
.butons{
        position:absolute;
        top:720px;
        left:10px;
        width:160%;
}
.butons button{
        width: 10%;
        position:relative;
        left:-250px;

}
.sele{
    position: relative;
    left: 200px;
    bottom: -100px;
}

</style>
<title>Credentials</title>
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
                     
                     if($account == "Student") {

                 ?>
                  <ul class="sidebar-nav">
                         <li><div style="background-color:rgb(31, 30, 29);"><a href="#">Input Grades</a></div></li>
                         <!-- <li><a href="adminsummary.php">View Summaries</a></li>
                         <li><a href="graphs.php">View Graphs</a></li> -->
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
                    
  
                        </div>

                        <form action="home3.php" method="POST">
                        <table class = "sele"> 
                <tr>

                <th class = "ww">Term: <select name="Semester">
    <option value="First"> First </option>
    <option value="Second"> Second </option>
    <option value="Special"> Special</option>
    
</select></th>
<th class = "xx">Curriculum: <select name="Curriculum">
    <option value="2013"> 2013 </option>
    <option value="2014"> 2018 </option>
  </select></th>
<th class = "xx">Program: <select name="Program">
    <option value="IT"> Information Technology </option>
    <option value="CS"> Computer Science </option>
    <option value="IS"> Information Systems </option>
    </select>
    </th>
    <th class = "xx">Year Level: <select name="YearLevel">
    <option value="1st year"> 1st Year</option>
    <option value="2nd year"> 2nd Year </option>
    <option value="3rd year"> 3rd Year </option>
    <option value="4th year"> 4th Year </option>
    </select>
    </th>
    <th class = "xx">Status <select name="Status">
    <option value="Regular">Regular</option>
    <option value="Irregular">Irregular</option>

    </select>
    </th>
<th><input type="submit" value="submit"></th>

</tr>
                    </table>


</form>




<h3></h3>
        
    
                
                        </div>
                        
</div>

                        </div>        
                               
                               
                        </div>
    </div>


</div>

    </div>
   



</body>
</head>
</html>

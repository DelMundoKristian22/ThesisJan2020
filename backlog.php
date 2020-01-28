<?php
 session_start(); 
 if(isset($_SESSION["gid"])){
    } 
    else{
            header("location: uploadpage.php");
    }



?>

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
        width: 69%;
        position:relative;
        left: 189px;
}

.outer-scontainer th {
	border: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}

.outer-scontainer td {
	border: 1px solid #dddddd;
	padding: 8px;
	text-align: left;
}
.outer-scontainer
{
    position:relative;
    left: -500px;
}
.outx {
	background: #F0F0F0;
	border: #e0dfdf 1px solid;
	padding: 20px;
	border-radius: 2px;
}
.outx {
	border-collapse: collapse;
	width: 100%;
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
    left: -500px;
}
h3{
        font-family:"TW Cen MT";}
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

</style>
</head>

<body>

 <?php

$db = mysqli_connect('localhost', 'root', '', 'accounttest');
$sid = $_SESSION['gid'];
$query = "SELECT * FROM 2013cur WHERE SID='$sid';";
$results = mysqli_query($db, $query);
$accountT = mysqli_fetch_assoc($results);
$lname =  $accountT['lname'];
$fname = $accountT['fname'];
?>
<body>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                     
                     if($account = "Admin") {

                 ?>
                  <ul class="sidebar-nav">
                         <li><div style="background-color:rgb(31, 30, 29);"><a href="#">View Accounts</a></div></li>
                         <li><a href="adminsummary.php">View Summaries</a></li>
                         <li><a href="#">View Graphs</a></li>
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

                        <div class="col-lg-8">
                        
                        
                        <br>
                           <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backlog</h2>
<div class = "outx">

<h3>



</table>
<table class = "outdooors">
<tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Name: <?php echo $lname?>, <?php echo $fname?>    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A.Y.: </tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student ID: 2016094282&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Term: </tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status: Regular&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year: </tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deficiencies: 0 Units&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Track: </tr><br>
<tr>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Backlog: 0 Units&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Passed:</tr><br>
</table>
<!-- </table>
<table class ="indoors">
<tr>ss</tr><br>
<tr>ss</tr><br>
<tr>ss</tr><br>
<tr>ss</tr><br>
<tr>ss</tr><br>
<tr>

</tr>
</table> -->

</div>
</h3>
<div class="outer-scontainer">
<table>
<tr>
<th class = "vv">Subject Code</th>
<th class = "ww">Description</th>
<th class = "xx">Status</th>
</tr>
<tr>
<td>ENG1</td>
<td> Introduction to College English</td>
<td><?php  echo $accountT['ENG1'];    ?></td>
</tr>
<tr>
<td>THY1</td>
<td> Contextualized Salvation History</td>
<td><?php  echo $accountT['THY1'];    ?></td>
</tr>
<tr>
<td>MATH101</td>
<td> College Algebra</td>
<td><?php  echo $accountT['MATH101'];    ?></td>
</tr>
<tr>
<td>MATH102</td>
<td> Trigonometry</td>
<td><?php  echo $accountT['MATH102'];    ?></td>
</tr>
<tr>
<td>PHL105</td>
<td> Philosophy of Science, Technology, and Information</td>
<td><?php  echo $accountT['PHL105'];    ?></td>
</tr>
<tr>
<td>VALED</td>
<td> Values Education</td>
<td><?php  echo $accountT['VALED'];    ?></td>
</tr>
<tr>
<td>ICS101</td>
<td> Computing Fundamentals</td>
<td><?php  echo $accountT['ICS101'];    ?></td>
</tr>
<tr>
<td>ICS111</td>
<td> Computer Programming 1(Imperative)</td>
<td><?php  echo $accountT['ICS111'];    ?></td>
</tr>
<tr>
<td>PE1</td>
<td> Physical Education 1</td>
<td><?php  echo $accountT['PE1'];    ?></td>
</tr>
<tr>
<td>NSTP1</td>
<td> National Service and Training Program</td>
<td><?php  echo $accountT['NSTP1'];    ?></td>
</tr>

</table>
</div>
<br><br>
<div class ="butons">
<a href="backlog.php"><button class ="btn btn-primary"type="submit" name="btnBack" id="btnBack">Backlog</button></a>
<a href="deficiency.php"><button class ="btn btn-primary"type="submit" name="btnBack" id="btnBack">Deficiencies</button></a>
<a href="passed.php"><button class ="btn btn-primary"type="submit" name="btnBack" id="btnBack">Passed Subjects</button></a>
<a href="home2.php"><button class ="btn btn-primary"type="submit" name="btnBack" id="btnBack">Back</button></a>
</div>
</body>
</html>




<?php session_start(); ?>
<?php 
    if(isset($_SESSION["user"])){
    } 
    else{
            header("location: index.php");
    }
    $account = $_SESSION["acType"];
    require_once("dbConfig.php");
    $sql = "SELECT * FROM accounttest ORDER BY userId DESC";
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
    width: 80%;
    height: 50%;
    left: 120px;
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

.sele{
    position: relative;
    left: 200px;
    bottom: -100px;
}
.btn-primary{
    position:relative;
    left:1000px;
    bottom: -790px;
    width: 10%;
}
.button2{
    position:relative;
    left:1000px;
    bottom: -990px;
    width: 10%;
}
.button3{
    position:relative;
    left:1000px;
    bottom: -990px;
    width: 10%;
}
h1{
    position:relative;
    top: -900px;
    left: 450px;
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
                     
                     if($account == "Student") {

                 ?>
                  <ul class="sidebar-nav">
                         <li><div style="background-color:rgb(31, 30, 29);"><a href="#">Course Tracker  </a></div></li>
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
                    
                        <table class = "sele"> 
                <tr>
                <th class = "ww">Term: <select>
    <option value="ss"> All</option>
    <option value="ss"> First </option>
    <option value="ss"> Second </option>
    <option value="ss"> Special</option>
    </select>
    
</select></th></th>
<th class = "xx">Curriculum: <select>
    <option value="ss"> 2013 </option>
    <option value="ss"> 2018 </option>
    </select>
<th class = "xx">Program: <select>  
    <option value="ss"> Computer Science </option>
    <option value="ss"> Information Technology </option>
    <option value="ss"> Information Systems </option></th>
    </select>
    <th class = "xx">Academic Standing: 
        <select disabled>
    <option value="ss"> Regular </option>
    <option value="ss"> Irregular </option>
    <option value="ss"> Conditional </option>
    <option value="ss"> Debarred </option></th>
    </select>

</tr>

</tr>
                    </table>

<table class ="outer-scontainer">
<tr>
<th class = "vv">Subject Code</th>
<th class = "ww">Description</th>
<th class = "xx">Status</th>
</tr>

<tr>
<td width ="19.6%">ENG1</td>
<td width ="60.5%"> Introduction to College English</td>
<td><select disabled >

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>THY1</td>
<td> Contextualized Salvation History</td>
<td><select disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>MATH101</td>
<td> College Algebra</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>MATH102</td>
<td> Trigonometry</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PHL105</td>
<td> Philosophy of Science, Technology, and Information</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>VALED</td>
<td> Values Education</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>ICS101</td>
<td> Computing Fundamentals</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>ICS111</td>
<td> Computer Programming 1(Imperative)</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PE1</td>
<td> Physical Education 1</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>NSTP1</td>
<td> National Service and Training Program</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>

</table>


<br><br><br>
<table class ="outer-scontainer">
<tr>
<th class = "vv">Subject Code</th>
<th class = "ww2">Description</th>
<th class = "xx2">Status</th>
</tr>

<tr>
<td width = "19.6%">ENG2</td>
<td width = "60.5%">Reading and Thinking Skills for Academic Study</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>THY 2
</td>
<td> Church and Sacraments
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>MATH 104
</td>
<td> Analytic Geometry
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PHYS 102
</td>
<td> Physics 1
                    </td>
<td><select  disabled> 

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PHYS 102L
</td>
<td> Physics 1 (LAB)
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PSY 1
</td>
<td> General Psychology
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>ICS 112
</td>
<td> Computer Programming II (Object-Oriented)
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>CS 201
</td>
<td> Discrete Structures 1
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PE2</td>
<td> Physical Education 2
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>NSTP2</td>
<td> National Service and Training Program</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>

</table>

<br><br><br>
<table class ="outer-scontainer">
<tr>
<th class = "vv">Subject Code</th>
<th class = "ww">Description</th>
<th class = "xx">Status</th>
</tr>

<tr>
<td width = "19.5%">ENG3</td>
<td width = 60.5%">Academic Writing Skills</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>FIL 1</td>
<td>Komunikasyon sa Akademikong Filipino</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>LIT 102A</td>
<td>Philippine Literatures </td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>MATH 108A</td>
<td>Calculus I</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PHYS 104</td>
<td>Physics 2</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PHYS 104L</td>
<td>Physics 2 (Lab)</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>CS 202
</td>
<td>Discrete Structures II</td>
<td><select disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>ICS 120</td>
<td>Human-Computer Interaction</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>ICS 121</td>
<td>Database Management Systems</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>
<tr>
<td>PE 3</td>
<td> Physical Education 3
</td>
<td><select  disabled>

    <option value = "Passed">Passed</option>
    <option value = "Passed">Failed</option>
    <option value = "Passed">WP</option>
    <option value = "Passed">WF</option>
    <option value = "Passed">FA</option>
    <option value = "Passed">INC</option>
</select></td>
</tr>

</table>

<h3></h3>
        
    
                
                        </div>
                        
</div>

                        </div>        
                               
                               
                        </div>
    </div>


</div>

    </div>
   

    <button type="submit" class="btn btn-primary" name="button1" id="button1"> Lock</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button type="submit" class="btn btn-primary" name="button2" id="button2"> Lock</button><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <button type="submit" class="btn btn-primary" name="button3" id="button3"> Lock</button><br><br>
    <h1>Course Tracker Form for Regular Student</h1>
</body>
</head>
</html>

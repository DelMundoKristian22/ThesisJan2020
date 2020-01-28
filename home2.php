<?php session_start(); ?>
<?php 
    if(isset($_SESSION["user"])){
    } 
    else{
            header("location: index.php");
    }
   

    require_once("dbConfig.php");
    $sql = "SELECT * FROM accounttest ORDER BY userId DESC";
    $stmt = mysqli_query($db,$sql);

    $account = $_SESSION["acType"];

?>



<?php

$conn = mysqli_connect('localhost', 'root', '', 'accounttest');

if (isset($_POST["import"])) {
	
	
	$row = 1;
	$csvF = array();
	$fileName = $_FILES["file"]["tmp_name"];
	if(($handle = fopen($fileName, "r")) !== FALSE) {
		while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
			$num = count($data);
			$row++;
			$csvF[] = $data;
			
			
			
			
		}
		fclose($handle);
		
		
	}
        echo $csvF[7][5];
		
		$id = $csvF[0][1];
		$aYr = $csvF[0][5];
		$sem = $csvF[1][5];
		$cYr = $csvF[2][5];
		$track = $csvF[3][5];
		$fname = $csvF[2][1];
		$lname = $csvF[1][1];
		$eng1 = $csvF[7][5];
		$thy1 = $csvF[8][5];
		$math101 = $csvF[9][5];
		$math102 = $csvF[10][5];
		$phl105 = $csvF[11][5];
		$valed = $csvF[12][5]; 
		$ics101 = $csvF[13][5];
		$ics111 = $csvF[14][5];
		$pe1 = $csvF[15][5]; 
		$nstp1 = $csvF[16][5];
		
		$query = "INSERT INTO 2013cur (SID , AcadYr, Sem, CurYr,  Track, ENG1, THY1, MATH101, MATH102, PHL105, VALED, ICS101, ICS111, PE1, NSTP1, fname, lname) VALUES ('$id','$aYr','$sem','$cYr','$track','$eng1','$thy1','$math101','$math102','$phl105','$valed','$ics101','$ics111','$pe1','$nstp1','$fname','$lname');";
		mysqli_query($conn,$query);
		
		
		
    
}
?>

<!DOCTYPE html>
<html>

<head>
<script src="jquery-3.2.1.min.js"></script>

<style>
body {
	font-family: Arial;
	width: 550px;
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
	width: 100%;
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
    left: -500px;
}
h2{
    position:relative;
    left: -100px;
}
.sort{
    position:relative;
    left:-350px;
    
    
}
</style>
<script type="text/javascript">
$(document).ready(function() {
    $("#frmCSVImport").on("submit", function () {

	    $("#response").attr("class", "");
        $("#response").html("");
        var fileType = ".csv";
        var regex = new RegExp("([a-zA-Z0-9\s_\\.\-:])+(" + fileType + ")$");
        if (!regex.test($("#file").val().toLowerCase())) {
        	    $("#response").addClass("error");
        	    $("#response").addClass("display-block");
            $("#response").html("Invalid File. Upload : <b>" + fileType + "</b> Files.");
            return false;
        }
        return true;
    });
});
</script>
</head>

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
                     
                     if($account == "Admin") {

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
                       
                         <li><a href="home2.php" style="background-color:rgb(31, 30, 29);">View Summary</a></li>
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
    <h2>Summary Page for Department Chairs</h2>
    <div>
    <table>
    <th name = "sort" class ="sort" id = "sort" ><input type="text" placeholder ="Search by Student ID"><button type="submit" ><i class="fa fa-search"></i></button> 
                                &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp; Sort By:<select><option>Name</option><option>ID</option></select> <button type="submit" id="submit" name="import"
                        class="btn btn-primary">Sort</button> &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;    
                                &nbsp; &nbsp; &nbsp; &nbsp;  
                                &nbsp; &nbsp; &nbsp; &nbsp;<button type="submit" id="submit" name="import"
                        class="btn btn-primary">Save PDF</button> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;   
                                &nbsp; &nbsp; &nbsp; &nbsp; 
                                  <button type="submit" id="submit" name="import"
                        class="btn btn-primary">Back</button>
    </table><br>        
    </div>
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="input-row">
              
                  
                   
                    <br />

                </div>

            </form>

        </div>
               <?php
            $sqlSelect = "SELECT * FROM 2013cur;";
            $result = mysqli_query($conn, $sqlSelect);
            
            if (mysqli_num_rows($result) > 0) {
                ?>
			<form method="POST" action="controller5.php" id="viewg" name="viewg">	
            <table id='userTable'>
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Academic Year</th>
                    <th>Semester</th>
                    <th>Current Year</th>
                    <th>Track</th>
                        <th>Last Name</th>
                        <th>First Name</th>

                </tr>
            </thead>
<?php
                
                while ($row = mysqli_fetch_array($result)) {
                    ?>
                    
                <tbody>
                <tr>
				
                    <td><?php  echo $row['SID']; ?></td>
                    <td><?php  echo $row['AcadYr']; ?></td>
                    <td><?php  echo $row['Sem']; ?></td>
                    <td><?php  echo $row['CurYr']; ?></td>
                    <td><?php  echo $row['Track']; ?></td>
                        <td><?php  echo $row['lname'];  ?></td>
                        <td><?php  echo $row['fname'];  ?></td>
					<td> <button class ="btn btn-primary"type="submit" name="g1" id="g1" value="<?php echo $row['SID']; ?>" > View Grades</button> </td>
                </tr>
                    <?php
                }
                ?>
                </tbody>
        </table>
		</form>
        <?php } ?>
    </div>
    
</body>

</html>







<?php

$conn = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b12a8f726f9b09', 'e6650e74', 'heroku_524f94403e88c36');

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
    <h2>Upload File</h2>
    
    <div id="response" class="<?php if(!empty($type)) { echo $type . " display-block"; } ?>"><?php if(!empty($message)) { echo $message; } ?></div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post"
                name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file"
                        id="file" accept=".csv">
                    <button type="submit" id="submit" name="import"
                        class="btn-submit">Import</button>
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
					<th>Name</th>

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
					<td><?php  echo $row['fname'] . " , " . $row['lname'];  ?></td>
					<td> <button type="submit" name="g1" id="g1" value="<?php echo $row['SID']; ?>" > View Grades</button> </td>
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







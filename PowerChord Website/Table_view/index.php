<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V02</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
		
		<div class="limiter">
				<div class="container-table100">
					<div class="wrap-table100">
							<div class="table">
		
								<div class="row header">
									<div class="cell">
										Track Name
									</div>
									<div class="cell"  style='border-right: 1px solid black;'>
										Track ID
									</div>
									<div class="cell" style='padding-left:10px;'>
										Member Name
									</div>
									<div class="cell">
										Member ID
									</div>
								</div>
			<?php
			 $conn=mysqli_connect("localhost","root","") or die($mysqli_error);
			 mysqli_select_db($conn,"powerchord");
			 $query="select * from track";
			 $query2="select * from member";
			 $res1=mysqli_query($conn,$query);
			 $res2=mysqli_query($conn,$query2);
			while($row1 = mysqli_fetch_array($res1,MYSQLI_ASSOC)){   //Creates a loop to loop through results
				if($row2 = mysqli_fetch_array($res2,MYSQLI_ASSOC)){
			echo "<div class='row'><div class='cell' data-title='Track Name'>" . $row1['Track_Name'] . "</div><div class='cell' data-title='Track ID' style='border-right: 1px solid;'>" . $row1['TrackID'] . "</div><div class='cell' data-title='Member Name' style='padding-left:10px;'>" . $row2['F_name'] . $row2['M_name'] . $row2['L_name'] . "</div><div class='cell' data-title='Member ID'>" . $row2['MemberID'] . "</div></div>";  //$row['index'] the index here is a field name
			}
			else{
				echo "<div class='row'><div class='cell' data-title='Track Name'>" . $row1['Track_Name'] . "</div><div class='cell' data-title='Track ID'>" . $row1['TrackID'] . "</div></div>";
			}
		}
			?>
			</div>
					</div>
				</div>
			</div>
			<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
			<script src="vendor/bootstrap/js/popper.js"></script>
			<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
			<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
			<script src="js/main.js"></script>
</body>
</html>
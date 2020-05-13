<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
	<style>
	</style>
</head>
<body><div class="container">
	<!-- <a href="../" class="btn btn-light text-center float-center" id="home">Home</a> -->
	</div>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
					<div class="table">
					<a href="../" class="btn btn-light text-center float-center" id="home">Home</a>
						<div class="row header">
							<div class="cell">
								Member ID
							</div>
							<div class="cell">
								Name
                            </div>
                            <div class="cell">
								Track ID
							</div>
                            <div class="cell">
								Track Name
							</div>
						</div>
    <?php
 	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
     mysqli_select_db($conn,"powerchord");
     $query="select member_buys_track.MemberID,F_name,M_name,L_name,Track_Name, member_buys_track.TrackID from member,track,member_buys_track where member_buys_track.MemberID=member.MemberID and member_buys_track.TrackID=track.TrackID";
     $res=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){   //Creates a loop to loop through results
	echo "<div class='row'><div class='cell' data-title='Member ID'>" . $row['MemberID'] . "</div>";
    echo "<div class='cell' data-title='Name'>" . $row['F_name'] . " " . $row['M_name'] . " " . $row['L_name'] . " " . "</div>";
    echo "<div class='cell' data-title='Track ID'>" . $row['TrackID'] . "</div>"; 
    echo "<div class='cell' data-title='Track Name'>" . $row['Track_Name'] . "</div>";
    echo "</div>";
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
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
	</div>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
			<a href="../" class="btn btn-light text-center float-center" id="home">Home</a>
					<div class="table">

						<div class="row header">
							<div class="cell">
								Album ID
							</div>
							<div class="cell">
								Album Name
							</div>
							<div class="cell">
								Genre
							</div>
							<div class="cell">
								Artist
							</div>
							<div class="cell">
								Price
                            </div>
                            <div class="cell">
                            Year_Released
							</div>
						</div>
    <?php
 	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
     mysqli_select_db($conn,"powerchord");
     $query="select * from album";
     $res=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){   //Creates a loop to loop through results
	echo "<div class='row'><div class='cell' data-title='Album ID'>" . $row['AlbumID'] . "</div>";
	echo "<div class='cell' data-title='Album Name'>" . $row['Album_Name'] . "</div>";
	echo "<div class='cell' data-title='Genre'>" . $row['Genre'] . "</div>";
	echo "<div class='cell' data-title='Artist'>" . $row['Artist'] . "</div>";
    echo "<div class='cell' data-title='Price'>" . $row['Price'] . "</div>";
    echo "<div class='cell' data-title='Year_Released'>" . $row['Year_Released'] . "</div>";
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
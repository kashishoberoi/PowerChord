<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>PowerChord</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="bootstrap.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>
        a{
            color: aliceblue;
		}
        </style>
</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form text-center">
						<div class="form-header">
							<h1>PowerChord</h1>
                        </div>
                        <h3 class="text-center form-header" style="color:#bc9811;">Members</h3>
                        <a href="Table_view/member.php" class="btn btn-info" >View [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(MemberID) AS Total FROM member";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]</a>
                        <!-- <a href="Table_view/tracksold.php" class="btn btn-info" >Tracks Sold</a>   -->
                        <a href="signup/" class="btn btn-dark">Add</a><br><br>
                        <!-- <a class="btn btn-dark">Update</a> -->
                        <h3 class="text-center form-header" style="color:#bc9811;">Tracks</h3>
                        <a href="Table_view/track.php" class="btn btn-info">View [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(DISTINCT TrackID) AS Total FROM track";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]</a>
						<a href="Table_view/tracksold.php" class="btn btn-info" >Tracks Sold [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(DISTINCT TrackID) AS Total FROM member_buys_track";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]
					</a>
						<a href="trackadd/" class="btn btn-dark">Add</a>
						<a href="trackdel/" class="btn btn-dark">Remove</a>
                        <!-- <a   class="btn btn-dark">Update</a> -->
                        <a href="buytrack/" class="btn btn-danger">Buy</a><br><br>
						<h3 class="text-center form-header" style="color:#bc9811;">Albums</h3>
                        <a href="Table_view/album.php" class="btn btn-info">View [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(AlbumID) AS Total FROM album";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]</a>
						<a href="Table_view/albumsold.php" class="btn btn-info" >Albums Sold [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(DISTINCT AlbumID) AS Total FROM member_buys_album";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]
					</a>
						<a href="albumadd/" class="btn btn-dark">Add</a>
						<a href="albumdel/" class="btn btn-dark">Remove</a>
						<a href="buyalbum/" class="btn btn-danger">Buy</a><br><br>
                        <!-- <a   class="btn btn-dark">Update</a> -->
                        <!-- <a   class="btn btn-danger">Delete</a><br><br> -->
                        <h3 class="text-center form-header" style="color:#bc9811;">Artists</h3>
                        <a href="Table_view/artist.php" class="btn btn-info">View [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(Name) AS Total FROM artist";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]</a>
                        <a href="artistadd/" class="btn btn-dark">Add</a><br><br>
                        <!-- <a   class="btn btn-dark">Update</a> -->
						<!-- <a   class="btn btn-danger">Delete</a><br><br> -->
						<h3 class="text-center form-header" style="color:#bc9811;">Playlists</h3>
                        <a href="Table_view/playlist.php" class="btn btn-info">View [
						<?php	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
							mysqli_select_db($conn,"powerchord");
							$query="select COUNT(Playlist_Name) AS Total FROM playlist";
							$res=mysqli_query($conn,$query);
							$row = mysqli_fetch_array($res,MYSQLI_ASSOC);
						echo "$row[Total]";?> ]</a>
						<a href="playlistadd/" class="btn btn-dark">Add</a>
						<a href="playlistaddtrack/" class="btn btn-dark">Add Track</a>
						<a href="playlistdel/" class="btn btn-dark">Remove</a>
						<a href="playlistdeltrack/" class="btn btn-dark">Remove Track</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

</html>
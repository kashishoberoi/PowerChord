<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
 	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
     mysqli_select_db($conn,"powerchord");
     $query="select COUNT(member_buys_track.TrackID) AS Total FROM member_buys_track";
     $res=mysqli_query($conn,$query);
     $row = mysqli_fetch_array($res,MYSQLI_ASSOC);
     echo "$row[Total]";


    // echo "<table>"; // start a table tag in the HTML
    // echo "<th><td>Name</td><td>Genre</td></th>";
    // // while($row = mysqli_fetch_array($res,MYSQLI_ASSOC)){   //Creates a loop to loop through results
    // // echo "<tr><td></td><td>" . $row['Track_Name'] . "</td><td>" . $row['Genre'] . "</td></tr>";  //$row['index'] the index here is a field name
    // // }

    // echo "</table>";
    ?>
</body>
</html>
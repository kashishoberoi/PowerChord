<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
    mysqli_select_db($conn,"powerchord");
    $q="select COUNT(1) FROM album WHERE AlbumID='$albumid'";
  
    $r=mysqli_query($conn,$q);
     $row=mysqli_fetch_array($r);
    if($row['COUNT(1)']==1){
        $query= "delete from album where AlbumID='$albumid'";
        $res=mysqli_query($conn,$query);
        if($res){
            echo "Successfully Deleted";
            header( "refresh:2;url=../" );
        }
        else{
            echo "There is problem with your enties, Try Again!!!";
            // echo "insert into track values ('$trackname','$albumid','$genre','$price','$trackid')";
            header( "refresh:3;url=index.html" );
        }
    }
    else{
        // echo "<script>alert('Wrong Id');location.replace('index.html');</script>";
        echo "<script>alert('Wrong Album ID'); location.replace('index.html')</script>";
    }
    ?>
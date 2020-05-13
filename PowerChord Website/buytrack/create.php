<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
    mysqli_select_db($conn,"powerchord");
    $query="insert into member_buys_track values ('$mid','$tid')";

    $res=mysqli_query($conn,$query);
    if($res){
        echo "Successfull Transaction";
        header( "refresh:2;url=../" );
	}
	else{
        echo "There is problem with your enties, Try Again!!!";
        header( "refresh:3;url=index.html" );
    }
    ?>
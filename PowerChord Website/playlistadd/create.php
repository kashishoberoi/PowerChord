<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
    mysqli_select_db($conn,"powerchord");
    $query="insert into playlist values ('$name','$id')";

    $res=mysqli_query($conn,$query);
    if($res){
        echo "Successfully Added";
        header( "refresh:2;url=../" );
	}
	else{
        echo "There is problem with your enties, Try Again!!!";
        header( "refresh:3;url=index.html" );
    }
    ?>
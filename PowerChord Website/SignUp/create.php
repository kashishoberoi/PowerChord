<?php
	extract($_POST);
	$conn=mysqli_connect("localhost","root","") or die($mysqli_error);
    mysqli_select_db($conn,"powerchord");
    $date =date("Y/m/d");
    $bool=true;
    $boolf=false;
    if($premium=='on'){
    $query="insert into member values ('$memid','$fname','$mname','$lname','$pass','$date',$bool)";
    }
    else{
        $query="insert into member values ('$memid','$fname','$mname','$lname','$pass','$date',$boolf)";
        }
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
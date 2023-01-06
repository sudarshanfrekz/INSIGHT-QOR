<?php

include("mainbase.php");

$name=$_GET['fname'];
$passwd=$_GET['password'];

session_start();


$select="select * from register where fname='".$name."' and password='".$passwd."'";

$query=mysqli_query($connection,$select);

$count=mysqli_num_rows($query);

if($count==1)
{
    $_SESSION['session_fname']=$name;
    $_SESSION['session_password']=$passwd;

    echo("<script> alert('LOGIN SUCCESS'); window.location='adhar.html'; </script>");
}

else{
    echo("<script> alert('LOGIN FAILED'); window.location='login.html'; </script>");
   
   
}







?>
<?php

$servername='localhost';
$uname='root';
$pass='';
$database='form';

$connection=mysqli_connect($servername,$uname,$pass,$database);

if($connection){
    echo("success");
}
else{
    echo("fail");
}



?>
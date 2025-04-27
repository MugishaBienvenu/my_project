<?php

$con=new mysqli("localhost","root","","bienvenu");
if($con->connect_error){
    die("connection failed:".$con->connect_error);
}


?>
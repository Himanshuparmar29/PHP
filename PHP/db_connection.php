<?php

$servername="localhost";
$username= "root";
$password= "";
//$dbname= "practice";

$conn=mysqli_connect($servername,$username,$password);

if($conn)
{
    echo"Connected!";
}
else{
    die("Connection failed : ".mysqli_connect_error());
}
?>
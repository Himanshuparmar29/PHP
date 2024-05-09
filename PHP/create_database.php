<?php 

$servername="localhost";
$username= "root";
$password= "";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed!".mysqli_connect_error());
}
$sql="CREATE DATABASE practice";

if(mysqli_query($conn,$sql)){
    echo "database created successfully!";
}
else{
    echo "Database not created ".mysqli_error($conn);
}
mysqli_close($conn);
?>
<?php

$conn=mysqli_connect("localhost","root","Sports@Inv2937","practice");

if(!$conn){
    die("Connection failed");
}

$id=$_POST["id"];
$sql="select * from student;";
if($result=mysqli_query($conn,$sql)){
    if(mysqli_num_rows($result)>0){
        $flag=1;
        while($row=mysqli_fetch_array($result)){
            if($id==$row["id"]){
                $sql1="delete from student where id='$id';";
                if(mysqli_query($conn,$sql1)){
                    echo"Deleted";
                    $flag=0;
                }
                break;
            }
        }
        if($flag){
            echo"No record found!";
        }
    }
    else{
        echo"No record found!";
    }
}
else{
    echo"Error!";
}

mysqli_close($conn);
?>
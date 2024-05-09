<?php
$servername ="localhost";
$username="root";
$password="Sports@Inv2937";
$dbname="practice";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("Connection failed".mysqli_connect_error());
}

$sql="SELECT * FROM student;";

$result=mysqli_query($conn,$sql);
if($result)
{
    if(mysqli_num_rows($result)>0){
        echo "<table border='1'>";
        echo "<tr>";
        echo "<th>Name</th>";
        echo "<th>Id</th>";
        echo "</tr>";
        while($row=mysqli_fetch_array($result)){
            if("Huzaifa"==$row["name"]){
            echo "<tr>";
            echo "<td>" . $row["name"] . "</td>";
            echo "<td>" . $row["id"] . "</td>";
            echo "</tr>";}
        }
        echo "</table>";
    }else{
        echo " No record available!";
    }
}
else{
    echo "error!";
}
mysqli_close($conn);
?>
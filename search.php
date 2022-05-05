<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pglife";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
    echo "Connection failed!!!".mysqli_connect__error();
}

$name=$_POST['name'];

$sql="SELECT * FROM cities where name='$name'";
$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error!!!".mysqli_error();
}
 $row=mysqli_fetch_assoc($result);
 if($row['name']=="Delhi")
 {
     include "delhi.html";
 }
 elseif($row['name']=="Mumbai")
 {
     include "mumbai.html";
 }
 elseif($row['name']=="Bengaluru")
 {
     include "bangalore.html";
 }
 elseif($row['name']=="Hyderabad")
 {
     include "hyderabad.html";
 }
 else{
     echo "NO PG's found in that city!!!!!!!!!!!";
 }
 mysqli_close($conn);
 ?>
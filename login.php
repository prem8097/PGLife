<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pglife";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn)
{
    echo "Connection failed!!!".mysqli_connect_error();
}

$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE email='$email' and password='$password'";

$result=mysqli_query($conn,$sql);
if(!$result)
{
    echo "Error".mysqli_error();
}
$row=mysqli_fetch_assoc($result);

if($row)
{
    include 'dashboard.html';
}
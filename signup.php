<?php
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="pglife";

$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);

if(!$conn)
{
    echo "connection failed!".mysql_connect_error();
}

$email=$_POST['email'];
$password=$_POST['password'];
$full_name=$_POST['full_name'];
$phone=$_POST['phone'];
$gender=$_POST['gender'];
$college_name=$_POST['college_name'];

$sql="INSERT INTO users(full_name,phone,email,password,college_name) VALUES('$full_name','$phone','$email','$password','$college_name')";

$result=mysqli_query($conn,$sql);

if(!$result)
{
    echo "Error!!!".mysqli_error();
}
else{
    echo "Registered Successfully";
    echo "<br>";
    echo "Hello\r\n" .$full_name;
    echo "Welcome to PGLife";
}
mysqli_close($conn);
?>
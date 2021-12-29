<?php

session_start();
if(isset($_POST['login']))
{
$email1=$_POST["email1"];
$pass2=$_POST["pass2"];




$servername="localhost";
$username="root";
$password="santhosh123";
$dbname="project";

$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
 die("connection failed".$conn->connect_error);
}
 $sql="select * from first where email='$email1' and pass1='$pass2'";
 $result=$conn->query($sql);
 if($result->num_rows>0)
 {
	 
	header("location:movies.php");
	 
 }
 else
 {
	 echo '<script>alert("Wrong Email Or Password please enter again")</script>';
	
 }
 }
?>  
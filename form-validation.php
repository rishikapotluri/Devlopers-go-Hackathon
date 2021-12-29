<?php






$servername="localhost";
$username="root";
$password="santhosh123";
$dbname="project";
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$email=$_POST["email"];
$phone=$_POST["phn"];
$pass1=$_POST["password"];


$conn= new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error)
{
 die("connection failed".$conn->connect_error);
}
 $sql="insert into first(fname,lname,email,phn,pass1) values('$fname','$lname','$email','$phone','$pass1')";

$result=$conn->query($sql);
if($result==TRUE)
{	
	 echo '<script>alert("Registration successful")</script>';
	  echo '<center><h1>Click on the below Link</h1><center>';
	  echo '<a href="sign-in page.html">click here</a>';
}
else
{
	die("connectfailed");
}
$conn->close();
?>  
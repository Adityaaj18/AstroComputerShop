<?php
session_start();
header('location:contactus.html')

$name=$_POST['name'];
$surname=$_POST['surname'];
$phno=$_POST['phno'];
$city=$_POST['city'];
$purpose=$_POST['purpose'];

	
	

	
$con=mysql_connect("localhost","root","");
if($con){
	echo"Successfull";
}
else {
	echo"No connection";
}
mysql_select_db($con,"astro");

	$sql="insert into contactus(Name,Surname,Phone,City,Purpose) values('$name','$surname','$phno','$city','$purpose')";

	mysql_query($con,$sql);

?>
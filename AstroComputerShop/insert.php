<?php
$name=$_POST['name']
$surname=$_POST['surname']
$phno=$_POST['phno']
$city=$_POST['city']

if(!empty($name) || !empty($surname) || !empty($phno))
{
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="astro";

	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbName);
	if(mysqli_connect_error())
	{
		die('Connection Error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$INSERT="INSERT INTO contactus(Name,Surname,Phone,City,Purpose) values(?,?,?,?,?)";
	}
}else{
	echo"All Field are required";
	die();
}
?>
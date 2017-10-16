<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("Connection failed:".mysqli_connect_error());
}
else
{
	$sql="Delete from mycart";
	mysqli_query($conn,$sql);
	echo "Product removed from your cart";
}
?>
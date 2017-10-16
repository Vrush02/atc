<?php
$product_id=$_POST['pid'];
$product_name=$_POST['pname'];
$city_name=$_POST['cname'];
$product_type=$_POST['ptype'];
$brand_type=$_POST['btype'];
$image=$_FILES['file']['name'];
$product_description=$_POST['pdesc'];
$cost=$_POST['cost'];
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
	//echo "Connected successfully"."<br>";
	$sql="Insert into cart(product_id,product_name,city_name,product_type,brand_type,image,product_desc,cost)
	values('$product_id','$product_name','$city_name','$product_type','$brand_type','$image','$product_description','$cost')";
	mysqli_query($conn,$sql);
		if($_FILES["file"]["error"]>0)
		{
			echo "Error:".$_FILES["file"]["error"]."<br>";
		}
		else
		{
			move_uploaded_file($_FILES["file"]["tmp_name"],"uploads/".$_FILES["file"]["name"]);
		}
	include("AddProduct.html");

}
?>
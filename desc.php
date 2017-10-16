<?php
$product_id=$_GET['product_id'];
//echo $product_id;
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
	//echo "Connected successfully";
	$sql="Select *from cart";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	$count=0;
	if($rowcount>0)
	{
		while($count<$rowcount)
		{
			$row=mysqli_fetch_array($result);
			if($row['product_id']==$product_id)
			{
				echo '<form action="addtocart.php" method="post">'.'<br>';
				echo "<input type='hidden' name='product_id' value='".$row['product_id']."'/>";
				echo "Product name:".$row['product_name']."<br>";
				echo "Product type:".$row['product_type']."<br>";
				echo "Brand type:".$row['brand_type']."<br>";
				echo "Product description:".$row['product_desc']."<br>";
				echo "Price:Rs.".$row['cost']."<br>";
				echo "<img src='uploads/".$row['image']."'/>"."<br>";
				echo '<input type="submit" value="Add to cart">'.'<br>';
				echo '</form>';
				$count++;
			}
		}
	}
}
?>
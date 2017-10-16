<?php
$login=$_REQUEST['user'];
//echo $login."<br>";
$pwd=$_REQUEST['pwd'];
//echo $pwd."<br>";
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
	$sql="Select *from user";
	$result=mysqli_query($conn,$sql);
	$rowcount=mysqli_num_rows($result);
	$count=0;
	if($rowcount>0)
	{
		while($count<$rowcount)
		{
			$row=mysqli_fetch_array($result);
			//echo $row['name'].' '.$row['pwd'].'<br>';
			if($row['user_name']==$login&&$row['password']==$pwd)
			{
				echo "Verified user login";
				echo '<a href="mycart.php">My cart</a>';
				session_start();
				$_SESSION['user_name']=$login;
				header("Location:http://localhost/Test/index.php");
			}
			else{
				echo "Not verified user"."<br>";
				echo '<a href="signup.html">Click here to signup</a>';
			}
			$count++;
		}
	}
}
?>
?>
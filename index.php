<html>
<head><title>index.php</title>
<style type="text/css">
  body {
    padding-left: 11em;
    font-family: Georgia, "Times New Roman",
          Times, serif;
    color: purple;
    background-color:pink }
  ul.navbar {
    list-style-type: none;
    padding: 0;
    margin: 0;
    position: absolute;
    top: 2em;
    left: 1em;
    width: 9em }
  h1 {
    font-family: Helvetica, Geneva, Arial,
          SunSans-Regular, sans-serif }
  ul.navbar li {
    background: white;
    margin: 0.5em;
    padding: 0.3em;
    border-right: 1em solid black }
  ul.navbar a {
    text-decoration: none }
  a:link {
    color: blue }
  a:visited {
    color: purple }
  </style>
</head>
<body>
<h1 style="height=400px;width=400px;background-color:pink;text-align:center"><b><i>MyCart.com</i><b></style><a href='index.php'></a></h1>
<hr>
<ul class="navbar">
  <li><a href="index.php">Home</a>
  <li><a href="mycart.php">MyCart</a>
  <li><a href="login.html">Login</a>
  <li><a href="signup.html">Signup</a>
</ul>
<hr>
</body>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="project1";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("Connection failed:".mysqli_connect_error());
}
else
{
//echo "Connected successfully"."<br>";
}
$sql="SELECT * from cart";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
if($rowcount>0)
{
	while($count<$rowcount)
	{
$row=mysqli_fetch_array($result);
//echo "<div style='border:1px solid black;width:40px;height:50px'>";
echo "<img src='uploads/".$row['image']."'/>";
echo "<a href='desc.php?product_id=".$row['product_id']."'/>";
echo $row['product_name']."</div>";
echo "</a>";
//echo "<br>";
$count++;
}
}
/*if(isset($_SESSION['user_name']))
{
	echo "<a href='mycart.php'>"."MyCart"."</a>";
}
*/
?>
</html>
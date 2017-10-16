<?php
session_start();
unset($_SESSION['user_name']);
session_destroy();
include("remove.php");
echo "Thank you"."<br>";
echo "<a href='index.php'/>HOME</a>";
?>
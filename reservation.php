<?php
include "dbconf.php";
//$con = mysqli_connect("localhost","root","","food");
session_start();
echo $_SESSION['id'] = $_POST['contact'];
echo $_SESSION['table_no'] = $_POST['table_no'];
echo $_POST["name"];
echo $_POST["email"];
$_POST["contact"];
$_POST["pax"];
$_POST["table_no"];
$_POST["msg"];
$sql = "INSERT INTO reservation (name, email, contact, pax, table_no, msg) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["contact"]."', '".$_POST["pax"]."', '".$_POST["table_no"]."', '".$_POST["msg"]."')";
mysqli_query($con, $sql);
//header("location:index.php#mu-restaurant-menu")
header("refresh:0 url=index.php");
?>
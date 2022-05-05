<?php
session_start();
$connect = mysqli_connect("127.0.0.1",root,"","MPITFinal2022");

$query = "SELECT * FROM Users WHERE Login='{$_POST["login"]}' and Password='{$_POST["password"]}' ";

$result = mysqli_query($connect, $query);

$bad = '1';

$num = mysqli_num_rows($result);

if($num != null){
	$stroka = $result->fetch_assoc();
	$_SESSION['id'] = $stroka['id'];
	header("Location: index.php");
	$_SESSION['NoReg'] = 0;
} else {
	$_SESSION['NoReg'] = 1;
	header("Location: indexRegAndSign.php?");
}
 ?>
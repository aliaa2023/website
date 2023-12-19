<?php
$firstname=$_REQUEST['first_name'];
$secondname=$_REQUEST['second_name'];




if (isset($_POST['btn'])) {

	$host="localhost";
	$user="root";
	$password="";
	$db="college project";
	
$conn=mysqli_connect($host,$user,$password,$db);
$insert="insert into information values('$firstname', '$secondname')";
$mysqli_query($conn, $insert);

if($conn){
	echo "<h1>your registration is done</h1>";
}
else{
	echo "<h1>your registration failed</h1>";
}






}













?>
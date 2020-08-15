<?php
session_start();




$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'redo');

$name = $_POST['user'];
$pass = $_POST['password'];

$s = " select * from userreg where user ='$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
	 echo "username already taken";
}
else{
	$reg= "insert into userreg(user , password) values('$name','$pass')";
	mysqli_query($con, $reg);
	echo "Registration Successfull";
}
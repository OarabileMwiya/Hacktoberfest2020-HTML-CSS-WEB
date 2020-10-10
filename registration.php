<?php
session_start();
$con = mysqli_connect('localhost', 'root');
if(!$con){
	die(" no connection".mysql_connect_error()); 
}

mysqli_select_db($con, 'accomodation');

$name = $_POST['user'];
$pass = $_POST['password'];
$fullname=$_POST['first'];
$surname =$_POST['last'];

#check if already registered
$q = " select * from users  where username = '$name' && password = '$pass' ";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
	echo '<script type="javascript"> alert("That user name is already registered in the system");</script>';
	//echo" user already in the system ";
}else{
	$qy="insert into users values ('$name','$pass','$fullname','$surname') ";
	mysqli_query($con, $qy);
 $_SESSION['username'] = $name;
	header('location:userHome.php');
    }

?>
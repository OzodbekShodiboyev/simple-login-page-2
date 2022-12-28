<?php


$con = mysqli_connect('localhost', 'root', '','exersize');


$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO `user` (`id`, `email`, `password`) VALUES ('0', '$email', '$password')";


$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Saqlandi!!!";
}

?>
<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Submited";

}else{
	echo "Not Submited";
}

mysqli_select_db($con,'website');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];

$query = "insert into userinfo (user,email,mobile,comment)
values ('$user', '$email','$mobile','$comment')";



mysqli_query($con,$query);

?>
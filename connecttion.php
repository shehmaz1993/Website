<?php 
//connect to my sql

$con=mysqli_connect("localhost","root","","Project");
//test connection
if(mysqli_connect_errno() ){
	echo "faield to connect to mysql".mysqli_connect_error();

}

else {
	echo"Welcome to the Package details";
}

echo '<br>';
?>
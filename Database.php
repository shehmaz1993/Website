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


//inserting into package table//


$Guide_Name=$_POST['Guide_Name'];
$Contact=$_POST['Contact'];
$Package_name=$_POST['Package_name'];
$Category=$_POST['Category'];
$Tour_place=$_POST['Tour_place'];
$Days=$_POST['Days'];
$Amount=$_POST['Amount'];

$sqli=" INSERT INTO Package(Guide_Name,Contact,Package_name,Category,Tour_place,Days,Amount)
values('$Guide_Name','$Contact','$Package_name','$Category','$Tour_place','$Days','$Amount')";


if (mysqli_query($con, $sqli)) {

    echo "New records created successfully";
} else {
    echo "Error: " . $sqli . "<br>" . mysqli_error($con);
}
 echo"</br>";



header("refresh:2; url=insert.html");

?>

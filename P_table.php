

 <?php


 $con=mysqli_connect("localhost","root","","Project");
    if(mysqli_connect_errno() ){
     echo "faield to connect to mysql".mysqli_connect_error();

  }

else {
    echo"To see the Guide details please click the 'Show' button";
}

  echo '</br>';


echo "<form method=post > <table>".

"<tr><td > <input type=submit name=showButton value=Show method=post></td></tr>".

"</table></form>";



if (isset($_POST['showButton']))
{
 

    $query ="SELECT Tour_id,Guide_Name,Contact,Package_name,Category,Tour_place,Days,Amount FROM Package ";
  $result=mysqli_query($con,$query);





echo "<table border='1'>
<tr>
<th>Tour_id</th>
<th>Guide_Name</th>
<th>Contact</th>
<th>Package_name</th>
<th>Category</th>
<th>Tour_place</th>
<th>Days</th>
<th>Amount</th>
</tr>";

  if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result) ) {   

  $ti=$row["Tour_id"];
  $nm= $row["Guide_Name"];
  $cont=$row["Contact"];
  $pac=$row["Package_name"];
  $cat=$row["Category"];
  $tp=$row["Tour_place"];
  $day=$row["Days"];
  $amo=$row["Amount"];

echo "<tr>";
echo "<td>" . $ti. "</td>";
echo "<td>" . $nm. "</td>";
echo "<td>" . $cont. "</td>";
echo "<td>" . $pac. "</td>";
echo "<td>" . $cat. "</td>";
echo "<td>" . $tp. "</td>";
echo "<td>" . $day. "</td>";
echo "<td>" . $amo. "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);




}
 
}




/*$id=$_GET['id'];
$sql = "SELECT * FROM materijali where Id=$id ";
$q = $conn->query($sql);
$r = $q ->fetch();
if ($r) {
$dobavljac=$r['Dobavljac'];*/
 
?> 




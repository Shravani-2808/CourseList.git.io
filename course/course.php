<?php
echo"displaying";
include('dbconnect.php');
//fetch from database
$sql="select * from course";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo"<table colspan='2' border='2'  style='background-color:#b5e2eb;border-style:none;border-color:yellow;margin-left:auto;margin-right:auto;width:80%;height:auto;'>";
echo "<tr><td>".$row["c_no"]."</td>";
echo "<td>".$row["c_name"]."</td>";
echo "<td>".$row["c_details"]."</td>";
echo "<td>".$row["c_duration"]."</td>";
echo "<td>".$row["c_eligibility"]."</td>";
echo "<td>".$row["c_fee"]."</td></tr>";
echo "</table>";
}
}
?>

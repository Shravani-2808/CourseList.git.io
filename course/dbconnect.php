<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbname="courselist";

//create connection
$conn = mysqli_connect($serverName,$userName,$password,$dbname);
//check connection
if($conn==NULL)
{
	echo "Connection Failed: ";
}
else
{
    echo"connected..";
}
?>

<html>
    <head>
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
    <title> LEARN PHP </title>
        <link rel="stylesheet" type="text/css" href="courselist.css">
    </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="logo.png">
                </div>
               <ul>
                <li class="active">
                    <a href="index.html">HOME</a>
                </li>
                <li>    
                    <a href="contactcourse.php">CONTACT</a>
                </li>
            </div> 
		<div class="title">
            <h1><b>LEARN PHP</b></h1>
		<h2><b>Course details,duration,Eligibility and Fees</b></h2>
        </div>
	<div class="details">
	<?php
		echo"displaying";
		include('dbconnect.php');
		//fetch from database
		$sql="select * from course where c_no=1";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		while($row=mysqli_fetch_assoc($result))
		{
		echo"<table colspan='2' border='2'  style='background-color:#b5e2eb;border-style:none;border-color:yellow;margin-left:auto;margin-right:auto;width:80%;height:auto;'>";
		
		echo "<tr><td>".$row["c_details"]."</td></tr>";
		echo "<tr><td>".$row["c_duration"]."</td></tr>";
		echo "<tr><td>".$row["c_eligibility"]."</td></tr>";
		echo "<tr><td>".$row["c_fee"]."</td></tr>";
		echo "</table>";
		}
		}
	?>
	</div>
	</header>
    </body>	 
</html>

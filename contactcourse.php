<html>
    <head>
        <meta name="viewport" content="initial-scale=1, width=device-width, viewport-fit=cover">
        <title> CONTACT FOR COURSES </title>
    <link rel="stylesheet" type="text/css" href="contactcourse.css">      
    </head>
<body>
    <header>
            <div class="main">
                <div class="logo">
                    <img src="logo.png">
                </div>
               <ul>
                <li>
                    <a href="index.html">HOME</a>
                </li>
               </ul>
            </div>  
        <div class="title">
            <h1><b><u>COURSE LIST</u></b></h1><br>
        </div>
    <div class="details">
	<?php
		echo"displaying";
		include('dbconnect.php');
		//fetch from database
		$sql="select * from contact";
		$result=mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
		while($row=mysqli_fetch_assoc($result))
		{
		echo"<table colspan='2' border='2'  style='background-color:#b5e2eb;border-style:none;border-color:yellow;margin-left:auto;margin-right:auto;width:30%;height:auto;'>";

		echo "<tr><td>".$row["t_title"]."</td>";
		echo "<td>".$row["t_desp"]."</td></tr>";
		echo "</table>";
		}
		}
	?>
	</div>
    </header>
  </body>
</html>

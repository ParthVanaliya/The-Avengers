<html>
<head>
 <title>employee details</title>
<link rel="stylesheet" href="employee.css" type="text/css">
</head>
<body>
<!--header-->
 <div class="headerr">
  <h1 class="heading" name="head_1">Department employees</h1>
 </div> 
 <button id="b1"><a href="add_emp.php">AddEmployee</a></button>
<div class="main">
<?php
$conn = mysqli_connect('localhost', 'root', '','helpdesk'); 
 $id=$_GET['de_id'];
 //echo $id;
$query = "SELECT * FROM employee where de_id=$id"; 
$result = mysqli_query($conn,$query); 
while($row = mysqli_fetch_array($result))
	{
		echo "<div class='card'>";
		echo "<div class='image'><img name='image_1' src='https://upload.wikimedia.org/wikipedia/commons/thumb/8/85/Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg/1199px-Gfp-missouri-st-louis-clubhouse-pond-and-scenery.jpg'></div>";
		echo "<div class='title'><h1 name='head_2'>";
		echo "<h1>".$row['em_name']."</h1>";
		$contact=$row['em_contact'];
		echo "</div><div class='des'><p name='para_1'>";
		echo $row['em_desi']."</p>";
		echo "<button name='bt_1'><a href='editemp.php?em_contact=$contact'>Edit</a></button>";
		echo "<button name='bt_2'><a href='removeemp.php?em_contact=$contact'>Remove</a></button>";
		echo "</div></div>";
	}
	mysqli_close($conn); 
?>
</div>
</body>
</html>
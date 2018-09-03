<html>	

	<head>
		<title> HaSan Home Page </title>
		<link rel="stylesheet" type="text/css" href="style2.css"/>
		<style>
	select,option{display:inline;}
	
</style>
	</head>	
	
	<body>
		<div>
		
	<fieldset>
		<div style=" color: white;">
			     <center><h1>HaSan Auto Parts</h1></center> 
				 <center>
				 <a href="nissan.php"><img src="image/N.png" width="100" height="50"></a>
				 <a href="toyota.php"><img src="image/t.png" width="100" height="50"></a>
				 <a href="ford.php"><img src="image/f.png" width="100" height="50"></a>
				 <a href="subaro.php"><img src="image/s.png" width="100" height="50"></a>
				</center>
				<button><a href="users.php">Logout</a></button>

				<button><a href="registration.php">Registration</a></button>



            </div>
            	
 				
		</fieldset><br>
		
	<div style="float:left;margin-right:400px;">
		<center>
		<a href="nissan.php">
			<img src="image/ngtr.jpg" width="400" height="300" alt="Submit">
		</a>
		<p style="color: white;">Nissan GTR</p>
	</div>
	<div >
		<center>
		<a href="toyota.php">
			<input type="image" src="image/GT86.jpg" width="400" height="300" alt="Submit">
		</a>
		<p style="color: white;">Toyota GT86</p>
	</div>
	<div style="float:left;margin-right:400px;">
		<center>
		<a href="subaro.php">
			<img type="image" src="image/subaru.jpg" width="400" height="300" alt="Submit">
		</a>
		<p style="color: white;">Subaru WRX</p>
	</div>
	<div >
		<center>
		<a href="ford.php">
			<img src="image/Ford.jpg" width="400" height="300" alt="Submit">
		</a>
		<P style="color: white;">Ford RS</P>
	</div>
	<?php
	include 'footer.php';
	?>
		
</div>	

</body>	
	
</html>
<?php
include 'myLink.php';
echo "<html>
    <head>
        <title>Patient's Record</title>
        <link type='text/css' rel='stylesheet' href='stylesheet.css'>
    </head>
    <body>
        <nav>
            <ul>
                <!-- <li><a href=''>Home</a></li> -->
                <li><a href='about.php'>About</a></li>
				<li><a href='/$homeLink'>Form</a></li>
            </ul>
        </nav>
		
		<div style='margin: 80px auto;'>
			<p style='font-size: 20px; font-weight: bold; text-align: justify; text-justify: inter-word;'>
				About
			</p>
			<br>
			<p>
				A patient record system is a type of clinical information system, which is dedicated to collecting, storing, manipulating, and making available clinical information important to the delivery of patient care.
				<br>
				<br>
				Web Application Developed by the following;
				<pre>
				<br>
		Karen Cleo Aninion
		Michael Adam Babanto
		Franklin Espinosa
		Mary Joy Magadan
		Jyrwyn James Montealto
		John Louise Tagas
		Krystle Tome
				</pre>
			</p>
		</div>
		
	</body>
	<footer>
		<p>Testing webpage only</p>
		<p id='hideme'>Create Table patients (date varchar(30), names varchar(30), age int(3), mobiles varchar(15), emails varchar(25), addresses varchar(100), concerns varchar(255));</p>
    </footer>
</html>";
/* <!DOCTYPE html>
<html>
    <head>
        <title>Patient's Record</title>
        <link type="text/css" rel="stylesheet" href="stylesheet.css">
    </head>
    <body>
        <nav>
            <ul>
                <!-- <li><a href="">Home</a></li> -->
                <li><a href="about.php">About</a></li>
				<li><a href="index.html">Form</a></li>
            </ul>
        </nav>
	</body>
	<footer>
		<p>Testing webpage only</p>
		<p id="hideme">Create Table patients (date varchar(30), names varchar(30), age int(3), mobiles varchar(15), emails varchar(25), addresses varchar(100), concerns varchar(255));</p>
    </footer>
</html> */
?>

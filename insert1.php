<?php
include 'myLink.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "patient_record");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$dates = mysqli_real_escape_string($link, $_REQUEST['date']);
$names = mysqli_real_escape_string($link, $_REQUEST['name']);
$ages = mysqli_real_escape_string($link, $_REQUEST['age']);
$mobiles = mysqli_real_escape_string($link, $_REQUEST['Mobile_Number']);
$emails = mysqli_real_escape_string($link, $_REQUEST['email']);
$addresses = mysqli_real_escape_string($link, $_REQUEST['address']);
$concerns = mysqli_real_escape_string($link, $_REQUEST['Enter_Concern']);
$puid =  uniqid();
$auid =  uniqid();
// Attempt insert query execution
$insert1 = "INSERT INTO patients (patient_id,patients_name,address,email) VALUES ('$puid','$names','$addresses','$emails');";
$insert2 = "INSERT INTO appointment (appointment_no, patient_id, doctor_id, times, concern) VALUES ('$auid','$puid','A001TS2','$dates','$concerns');";
//$insert3 = "INSERT INTO doctor ()";

if(mysqli_query($link, $insert1)){
    echo "Records added successfully.";
	// header("Location: /$homeLink/$done");
	// exit();
	
	if(mysqli_query($link, $insert2)){
    echo "Records added successfully.";
	header("Location: /$homeLink/$done");
	exit();
	} else {
		echo "ERROR: Could not able to execute $insert2. " . mysqli_error($link);
	}
}

else{
    echo "ERROR: Could not able to execute $insert1. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
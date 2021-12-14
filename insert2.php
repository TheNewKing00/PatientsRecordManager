<?php
include 'myLink.php';
include 'insert1.php';

$insert2 = "INSERT INTO appointment (appointment_no, patient_id, doctor_id, times, concern) VALUES ('$auid','$puid','A001TS2','$dates','$concerns');";

if(mysqli_query($link, $insert2)){
    echo "Records added successfully.";
	header("Location: $myLink/$homeLink/$done");
	exit();
} else{
    echo "ERROR: Could not able to execute $insert2. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
<?php
	include "connectdb.php";
	
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$birthdate = $_POST['birthdate'];
	$phonenumber = $_POST['phonenumber'];
	$NIM = $_POST['NIM'];
	$entrydate = $_POST['entrydate'];
	$program = $_POST['program'];
	$phonenumber = $_POST['phonenumber'];
	$descriptoin = $_POST['description'];
	
	
	$masukperson = "INSERT INTO person (`firstname`, `lastname`, `birthdate`) ($firstname, $lastname, $birthdate)";
	$masukmahasiswa = "INSERT INTO mahasiswa (`NIM`, `personID`, `entrydate`, `program`) ($NIM, $idjustnow, $entrydate, $program)";
	$masuktelpon = "INSERT INTO telephone (`personID`, `phonenumber`, `description`) ($idjustnow, $phonenumber, $description)";

	if ($conn->query($masukperson) === TRUE) {
			$idjustnow = $conn->insert_id;
			$conn->query($masukmahasiswa);
			$conn->query($masuktelpon);
	}
	else {
			echo 'Error: '. $conn->error;
	}
	
	$conn->close();
	
	header('Location: index.html'); //Ini comment untuk perubahan
?>
<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['update'])){
		$Id = $_POST['Id'];
		$cod_id = $_POST['cod_id'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$gender = $_POST['gender'];
		$unidad = $_POST['unidad'];
		$password = md5($_POST['password']);
		
		mysqli_query($conn, "UPDATE `student` SET `cod_id` = '$cod_id', `firstname` = '$firstname', `lastname` = '$lastname', `gender` = '$gender', `unidad` = '$unidad', `password` = '$password' WHERE `Id` = '$Id'") or die(mysqli_error());
		
		echo "<script>alert('Successfully updated!')</script>";
		echo "<script>window.location = 'student.php'</script>";
	}
?>
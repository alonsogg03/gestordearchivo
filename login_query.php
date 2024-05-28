<?php
	session_start();
    
    // Mostrar errores de PHP
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

	require 'admin/conn.php';
	
	if(ISSET($_POST['login'])){
		$cod_id = $_POST['cod_id'];
		$password = md5($_POST['password']);
		
		$query = mysqli_query($conn, "SELECT * FROM `student` WHERE `cod_id` = '$cod_id' && `password` = '$password'") or die(mysqli_error());
		$fetch = mysqli_fetch_array($query);
		$row = $query->num_rows;
		
		if($row > 0){
			$_SESSION['student'] = $fetch['Id'];
			header("location: student_profile.php");
		}else{
			echo "<center><label class='text-danger'>Usuario o Contraseña Inconrecta</label></center>";
		}
	}
?>
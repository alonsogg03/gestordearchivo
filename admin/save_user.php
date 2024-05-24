<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$status = $_POST['status'];
		$result = mysqli_query($conn, "INSERT INTO `user` (firstname, lastname, username, password, status) VALUES ('$firstname', '$lastname', '$username', '$password', '$status')");
if ($result) {
    header('location: user.php');
} else {
    $error_message = "Error al guardar el usuario: " . mysqli_error($conn);
    // Manejar el error de alguna manera, como mostrar un mensaje al usuario o registrar el error en un archivo de registro.
}

	}
?>
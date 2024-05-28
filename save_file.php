<?php
require_once 'admin/conn.php';

if (isset($_POST['save'])) {
    // Validar datos del formulario
    if (!isset($_POST['cod_id']) || !isset($_FILES['file'])) {
        die("Error: Datos del formulario incompletos.");
    }

    $cod_id = $_POST['cod_id'];
    $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_type = $_FILES['file']['descripcion'];
    $file_temp = $_FILES['file']['tmp_name'];
    $location = "files/" . $cod_id . "/" . $file_name;
    $date = date("Y-m-d H:i:s", strtotime("+17 hours"));

    // Crear directorio si no existe
    if (!file_exists("files/" . $cod_id)) {
        mkdir("files/" . $cod_id, 0777, true); // También establece los permisos a 0777
    }

    //comentario de prueba

    // Mover el archivo al directorio de destino
    if (move_uploaded_file($file_temp, $location)) {
        // Insertar en la base de datos
        $query = "INSERT INTO `storage` (`filename`, `file_type`, `date_uploaded`, `cod_id`) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, 'sssi', $file_name, $file_type, $date, $cod_id);
        mysqli_stmt_execute($stmt);

        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header('Location: student_profile.php');
            exit;
        } else {
            echo "Error al insertar en la base de datos.";
        }
    } else {
        echo "Error al mover el archivo.";
    }
}
?>

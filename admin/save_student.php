<?php
require_once 'conn.php';

if (isset($_POST['save'])) {
    $cod_id = $_POST['cod_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $unidad = $_POST['unidad'] ;
    $password = md5($_POST['password']);

    mysqli_query($conn, "INSERT INTO `student` (`cod_id`, `firstname`, `lastname`, `gender`, `unidad`, `password`) VALUES ('$cod_id', '$firstname', '$lastname', '$gender', '$unidad', '$password')") or die(mysqli_error($conn));

    header('location: student.php');
}
?>

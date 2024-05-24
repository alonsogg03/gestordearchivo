<?php
require_once 'conn.php';

if (isset($_POST['save'])) {
    $stud_no = $_POST['stud_no'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $gender = $_POST['gender'];
    $unidad = $_POST['unidad'] ;
    $password = md5($_POST['password']);

    mysqli_query($conn, "INSERT INTO `student` (`stud_no`, `firstname`, `lastname`, `gender`, `unidad`, `password`) VALUES ('$stud_no', '$firstname', '$lastname', '$gender', '$unidad', '$password')") or die(mysqli_error($conn));

    header('location: student.php');
}
?>

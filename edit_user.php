<?php
     include('connection.php');

     $con = connection();


$id = $_POST['id'];
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$speciality = $_POST['speciality'];
$state = $_POST['state'];
$phone = $_POST['phone'];


$sql = "UPDATE medicos SET Apellido='$lastname' , Nombre='$name', Especialidad='$speciality', Provincia='$state', Telefono='$phone' WHERE id='$id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("location: lista.php");
};
?>
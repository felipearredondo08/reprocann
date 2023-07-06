<?php 

include('connection.php');
$con = connection();

$id = null;
$lastname = $_POST['lastname'];
$name = $_POST['name'];
$speciality = $_POST['speciality'];
$state = $_POST['state'];
$phone = $_POST['phone'];


$sql = "INSERT INTO medicos VALUES('$id', '$lastname','$name','$speciality','$state','$phone')";
$query = mysqli_query($con, $sql);



if($query){
    Header("location: lista.php");
};

?>


<?php

include('connection.php');

$con = connection();

$id = $_GET['id'];

$sql = "DELETE FROM Medicos WHERE ID='$id'";

$query = mysqli_query($con, $sql);

if($query){
    Header("location: lista.php");
};

?>
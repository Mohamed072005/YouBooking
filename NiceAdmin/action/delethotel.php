<?php

include '../connexion.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delet = "DELETE FROM hotel WHERE hotel_id = '$id'";
    $sql = mysqli_query($conn, $delet);
    header('location:../proprietierhotel.php');
}

?>
<?php

include '../connexion.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $virifie = "SELECT * FROM hotel WHERE hotel_id = '$id'";
    $sql = mysqli_query($conn, $virifie);
    if($sql){
        $delet = "SELECT * FROM hotel JOIN localisation ON localisation.location_id = hotel.location_id ";
    }
    $user = mysqli_fetch_assoc($sql);
}
?>


<?php

include '../connexion.php';


if (isset($_GET['id'])) {
    $user_id =  $_GET['id'];
    $sql = "DELETE FROM users WHERE user_id = '$user_id'";
    
    if (mysqli_query($conn, $sql)) {
       header('location:../utlisateurs.php');
    } else {
        echo "Error deleting user: " . mysqli_error($conn);
    }
} else {
    echo "User ID not specified.";
}


?>

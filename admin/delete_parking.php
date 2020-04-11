<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    if(empty($_GET['id'])) {

        redirect("parking.php");

    }

$parking = Parking::find_by_id($_GET['id']);

if($parking) {

    $session->message("The {$parking->name} user has been deleted");
    $parking->delete_photo();
    redirect("parking.php");
    
} else {

    redirect("parking.php");

}

?>
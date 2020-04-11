<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    if(empty($_GET['id'])) {

        redirect("rents.php");

    }

$rent = Rent::find_by_id($_GET['id']);

if($rent) {

    $session->message("The {$rent->rent_house_name} has been deleted");
    $rent->delete_photo();
    redirect("rents.php");
    
} else {

    redirect("rents.php");

}


?>
<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    if(empty($_GET['id'])) {

        redirect("reform.php");

    }

$reform = Reform::find_by_id($_GET['id']);

if($reform) {

    $session->message("The {$reform->name} user has been deleted");
    $reform->delete_photo();
    redirect("reform.php");
    
} else {

    redirect("reform.php");

}





?>
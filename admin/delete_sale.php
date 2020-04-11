<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    if(empty($_GET['id'])) {

        redirect("sales.php");

    }

$sale = Sale::find_by_id($_GET['id']);

if($sale) {

    $session->message("The {$sale->sale_house_name} user has been deleted");
    $sale->delete_photo();
    redirect("sales.php"); 

} else {

    redirect("sales.php");

}

?>
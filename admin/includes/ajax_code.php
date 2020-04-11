<?php require("init.php"); 

$db_object = new Db_object();

if(isset($_POST['thumb_image'])) {

    $db_object->ajax_save_user_image($_POST['thumb_image'], $_POST['id'], $_POST['db_table']);

}

// if(isset($_POST['id'])) {

//     Photo::display_sidebar_data($_POST['id']);
// }


?>
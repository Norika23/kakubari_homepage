$(document).ready(function() {

 
        var user_href;
        var user_href_splitted;
        var id;
        var image_src;
        var image_href_splitted;
        var thumb_image;
        //var photo_id;
        var db_table;



    $(".modal_thumbnails").click(function() {


        $("#set_user_image").prop('disabled', false);

        user_href = $("#id").prop('href');
        user_href_splitted = user_href.split("=");
        id = user_href_splitted[user_href_splitted.length -1];

        image_src = $(this).prop("src");
        image_href_splitted = image_src.split("/");
        thumb_image = image_href_splitted[image_href_splitted.length -1];

        db_table = $(this).attr("data");

        $.ajax({

            url: "includes/ajax_code.php",
            data:{id:id},
            type: "POST",
            success:function(data) {

                if(!data.error) {

                    $("#modal_sidebar").html(data);

                }

            }

        })


    });


    $("#set_user_image").click(function() {
        $.ajax({
            url: "includes/ajax_code.php",
            data:{thumb_image:thumb_image, id:id, db_table:db_table},
            type: "POST",
            success:function(data) {
                if(!data.error) {
                    $(".user_image_box a img").prop('src', data);
                }
            }
        })
    });

    $("#delete_user_image").click(function() {
        $.ajax({
            url: "includes/ajax_code.php",
            data:{delete:thumb_image, id:id, db_table:db_table},
            type: "POST",
            success:function(data) {
                if(!data.error) {
                    $(".user_image_box a img").prop('src', data);
                }
            }
        })
    });
/****Edit photo side bar  ******/


$(".info-box-header").click(function() {

    $(".inside").slideToggle("fast");

    $("#toggle").toggleClass("glyphicon-menu-down glyphicon , glyphicon-menu-up glyphicon ");

});


/*****DELETE function ****/
$(".delete_link").click(function() {

    return confirm("Are you sure you want to delete this item");

});



    tinymce.init({selector:'textarea'});







});



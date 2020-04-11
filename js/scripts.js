$(document).ready(function() {

    $(function(){
        $("#navi a").click(function(){
            $("#big img").attr("src",$(this).attr("href"));
            return false;
        });
    });


});
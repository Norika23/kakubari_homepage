<?php require_once("init.php"); ?>

<?php

$classname="";
if(isset($_GET['parking'])) {
  $classname = Parking::find_by_id($_GET['id']);
}

if(isset($_GET['rent'])) {
  $classname = Rent::find_by_id($_GET['id']);
}

if(isset($_GET['sale'])) {
  $classname = Sale::find_by_id($_GET['id']);
}

if(isset($_GET['reform'])) {
  $classname = Reform::find_by_id($_GET['id']);
}

?>

<div class="modal fade" id="photo-library">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Gallery System Library</h4>
      </div>
      <div class="modal-body">
          <div class="col-md-9">
             <div class="thumbnails row">

                <?php  
                  $classname->image = explode (',',$classname->image);
                  for($i = 0; $i < count($classname->image); $i++ ){  ?>
               <div class="col-xs-2">
                 <a role="checkbox" aria-checked="false" tabindex="0" id="" href="#" class="thumbnail">
                   <img class="modal_thumbnails img-responsive" src="<?php echo $classname->picture_path_all($i); ?>" data="<?php echo $classname->db_table_name; ?>">
                 </a>
                  <div class="photo-id hidden"></div>
               </div>
                <?php } ?>
                
             </div>
          </div><!--col-md-9 -->

  <div class="col-md-3">
    <div id="modal_sidebar"></div>
  </div>

   </div><!--Modal Body-->
      <div class="modal-footer">
        <div class="row">
               <!--Closes Modal-->
              <button id="set_user_image" type="button" class="btn btn-primary" disabled="true" data-dismiss="modal">サムネイルに変更</button>
        </div>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
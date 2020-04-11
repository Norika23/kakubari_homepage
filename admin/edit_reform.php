<?php include("includes/header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

if(empty($_GET['id'])) {

    redirect("reform.php");

} 

$reform = Reform::find_by_id($_GET['id']);

if(isset($_POST['update'])) {

    if($reform) {
        
        $reform->name = $_POST['name'];
        $reform->price = $_POST['price'];
        $reform->building_type = $_POST['building_type'];
        $reform->description = $_POST['description'];
        $reform->manufacturer = $_POST['manufacturer'];
        $reform->product_type = $_POST['product_type'];
        $reform->status = $_POST['status'];

        if(empty($_FILES['image'])) {

            $reform->save();
            redirect("edit_reform.php?reform&id={$reform->id}");
            $session->message("The reform has been updated");
 
        } else {

            $reform->set_file($_FILES['image']);
            $reform->upload_photo();
            if(is_array($reform->image)){
                $reform->image = implode("," , $reform->image);
            }
            $reform->save();
            redirect("edit_reform.php?reform&id={$reform->id}");
            $session->message("The reform has been updated");
            
        }

    }

}

?>

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <?php include("includes/top_nav.php"); ?>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           
            <?php include("includes/side_nav.php"); ?>

            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">
            
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        リフォーム編集       
                    </h1>
                    
                <div class="col-md-6 user_image_box">        
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php echo $reform->thumb_image_path_and_placeholder(); ?>" alt=""></a>
                    <p>※画像をクリックすると、アップロード中の写真全て閲覧可能<br>
                       ※その中でサムネイルの変更可能
                    </p>
                </div>

                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-md-6">

                        <div class="form-group">
                            <input type="file" multiple name="image[]">
                            <p>※追加などで再度アップロードする場合は、画像全て選択してアップロード必要</p>
                        </div>

                        <div class="form-group">
                            <label for="name">リフォーム名</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $reform->name; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="price">費用</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $reform->price; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="building_type">建物タイプ</label>
                            <input type="text" name="building_type" class="form-control" value="<?php echo $reform->building_type; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="manufacturer">メーカー</label>
                            <input type="text" name="manufacturer" class="form-control" value="<?php echo $reform->manufacturer; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="product_type">商品タイプ</label>
                            <input type="text" name="product_type" class="form-control" value="<?php echo $reform->product_type; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="description">詳細</label>
                            <textarea class="form-control" name="description" id="body" cols="30" rows="10"><?php echo $reform->description; ?></textarea>                      
                        </div>

                        <div class="form-group">
                            <label for="status">公開・非公開</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $reform->status; ?>">                      
                        </div>

                        <div class="form-group">
                            <a id="id" class="btn btn-danger" href="delete_reform.php?id=<?php echo $reform->id; ?>">Delete</a>                     
                            <input type="submit" name="update" class="btn btn-primary pull-right" value="Update">
                        </div>
                        
                    </div>

                    </form>

                </div>
            </div>
            <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
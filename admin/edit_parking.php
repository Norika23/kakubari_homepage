<?php include("includes/header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

if(empty($_GET['id'])) {

    redirect("parkings.php");

} 

$parking = Parking::find_by_id($_GET['id']);

if(isset($_POST['update'])) {

    if($parking) {
        
        $parking->name = $_POST['name'];
        $parking->price = $_POST['price'];
        $parking->address = $_POST['address'];
        $parking->traffic = $_POST['traffic'];
        $parking->status = $_POST['status'];
        $parking->parking_status = $_POST['parking_status'];
        
        if(empty($_FILES['image'])) {

            $parking->save();
            redirect("edit_parking.php?parking&id={$parking->id}");
            $session->message("The parking has been updated");
 
        } else {

            $parking->set_file($_FILES['image']);
            $parking->upload_photo();
            if(is_array($parking->image)){
                $parking->image = implode("," , $parking->image);
            }
            $parking->save();
            redirect("edit_parking.php?parking&id={$parking->id}");
            $session->message("The parking has been updated");
            
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
                        駐車場編集
                    </h1>
                    <h1 class="bg-success">
                        <?php echo $message; ?>
                    </h1>
                <div class="col-md-6 user_image_box">
                <label for="picture">サムネイル</label>        
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php echo $parking->thumb_image_path_and_placeholder(); ?>" alt=""></a>
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
                            <label for="name">駐車場名</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $parking->name; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="price">賃料</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $parking->price; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $parking->address; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="land_area">交通</label>
                            <input type="text" name="traffic" class="form-control" value="<?php echo $parking->traffic; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="parking_status">満車・空き有</label>
                            <input type="text" name="parking_status" class="form-control" value="<?php echo $parking->status; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="status">公開・非公開</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $parking->status; ?>">                      
                        </div>

                        <div class="form-group">
                            <a id="id" class="btn btn-danger" href="delete_parking.php?id=<?php echo $parking->id; ?>">Delete</a>                      
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
<?php include("includes/header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

if(empty($_GET['id'])) {

    redirect("rents.php");

} 

$rent = Rent::find_by_id($_GET['id']);

if(isset($_POST['update'])) {

    if($rent) {
        
        $rent->rent_house_name = $_POST['rent_house_name'];
        $rent->house_type = $_POST['house_type'];
        $rent->rent_house_price = $_POST['rent_house_price'];
        $rent->deposit = $_POST['deposit'];
        $rent->rent_house_layout = $_POST['rent_house_layout'];
        $rent->floor = $_POST['floor'];
        $rent->rent_house_local_station = $_POST['rent_house_local_station'];
        $rent->rent_house_address = $_POST['rent_house_address'];
        $rent->rent_house_built = $_POST['rent_house_built'];
        $rent->rent_house_area = $_POST['rent_house_area'];
        $rent->contract = $_POST['contract'];
        $rent->status = $_POST['status'];

        if(empty($_FILES['image'])) {

            $rent->save();
            redirect("edit_rent.php?rent&id={$rent->id}");
            $session->message("The rent has been updated");
 
        } else {

            $rent->set_file($_FILES['image']);
            $rent->upload_photo();
            if(is_array($rent->image)){
                $rent->image = implode("," , $rent->image);
            }
            $rent->save();
            redirect("edit_rent.php?rent&id={$rent->id}");
            $session->message("The rent has been updated");
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
                        賃貸物件編集             
                    </h1>
                    
                <div class="col-md-6 user_image_box">           
                    <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php echo $rent->thumb_image_path_and_placeholder(); ?>" alt=""></a>
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
                            <label for="rent_house_name">物件名</label>
                            <input type="text" name="rent_house_name" class="form-control" value="<?php echo $rent->rent_house_name; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="house_type">建物種別（アパート・マンション・戸建て）</label>
                            <input type="text" name="house_type" class="form-control" value="<?php echo $rent->house_type; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_price">賃料</label>
                            <input type="text" name="rent_house_price" class="form-control" value="<?php echo $rent->rent_house_price; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="deposit">礼金敷金</label>
                            <input type="text" name="deposit" class="form-control" value="<?php echo $rent->deposit; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_layout">間取り</label>
                            <input type="text" name="rent_house_layout" class="form-control" value="<?php echo $rent->rent_house_layout; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="floor">所在階/階数</label>
                            <input type="text" name="floor" class="form-control" value="<?php echo $rent->floor; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_local_station">最寄り駅</label>
                            <input type="text" name="rent_house_local_station" class="form-control" value="<?php echo $rent->rent_house_local_station; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_address">住所</label>
                            <input type="text" name="rent_house_address" class="form-control" value="<?php echo $rent->rent_house_address; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_built">築年</label>
                            <input type="text" name="rent_house_built" class="form-control" value="<?php echo $rent->rent_house_built; ?>">                  
                        </div>

                        <div class="form-group">                       
                            <label for="rent_house_area">専有面積</label>
                            <input type="text" name="rent_house_area" class="form-control"  value="<?php echo $rent->rent_house_area; ?>">                      
                        </div>

                        <div class="form-group">                       
                            <label for="contract">契約状態</label>
                            <input type="text" name="contract" class="form-control"  value="<?php echo $rent->contract; ?>">                       
                        </div>

                        <div class="form-group">      
                            <label for="status">公開・非公開</label>
                            <input type="text" name="status" class="form-control"  value="<?php echo $rent->status; ?>">                     
                        </div>

                        <div class="form-group">
                            <a id="id" class="btn btn-danger" href="delete_rent.php?id=<?php echo $rent->id; ?>">Delete</a>                      
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
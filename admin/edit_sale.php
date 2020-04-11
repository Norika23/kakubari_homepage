<?php include("includes/header.php"); ?>
<?php include("includes/photo_library_modal.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

if(empty($_GET['id'])) {

    redirect("sales.php");

} 

$sale = Sale::find_by_id($_GET['id']);

if(isset($_POST['update'])) {

    if($sale) {
        
        $sale->name = $_POST['name'];
        $sale->price = $_POST['price'];
        $sale->address = $_POST['address'];
        $sale->land_area = $_POST['land_area'];
        $sale->building_area = $_POST['building_area'];
        $sale->per_tsubo = $_POST['per_tsubo'];
        $sale->layout = $_POST['layout'];
        $sale->station = $_POST['station'];
        $sale->on_foot = $_POST['on_foot'];
        $sale->built = $_POST['built'];
        $sale->status = $_POST['status'];
        

        if(empty($_FILES['image'])) {

            $sale->save();
            redirect("edit_sale.php?sale&id={$sale->id}");
            $session->message("The sale has been updated");
 
        } else {

            $sale->set_file($_FILES['image']);
            $sale->upload_photo();
            if(is_array($sale->image)){
                $sale->image = implode("," , $sale->image);
            }
            $sale->save();

            redirect("edit_sale.php?sale&id={$sale->id}");
            $session->message("The sale has been updated");
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
                        売買物件編集                
                    </h1>
                    
                <div class="col-md-6 user_image_box">
                  
                <label for="picture">サムネイル</label>              
                <a href="#" data-toggle="modal" data-target="#photo-library"><img class="img-responsive" src="<?php echo $sale->thumb_image_path_and_placeholder(); ?>" alt=""></a>
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
                            <label for="name">物件名</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $sale->name; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="price">販売価格</label>
                            <input type="text" name="price" class="form-control" value="<?php echo $sale->price; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $sale->address; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="land_area">土地面積</label>
                            <input type="text" name="land_area" class="form-control" value="<?php echo $sale->land_area; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="building_area">建物面積</label>
                            <input type="text" name="building_area" class="form-control" value="<?php echo $sale->building_area; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="per_tsubo">坪単価</label>
                            <input type="text" name="per_tsubo" class="form-control" value="<?php echo $sale->per_tsubo; ?>">                      
                        </div>
                        <div class="form-group">
                            <label for="layout">間取り</label>
                            <input type="text" name="layout" class="form-control" value="<?php echo $sale->layout; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="station">最寄り駅</label>
                            <input type="text" name="station" class="form-control" value="<?php echo $sale->station; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="on_foot">徒歩何分</label>
                            <input type="text" name="on_foot" class="form-control" value="<?php echo $sale->on_foot; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="built">築年</label>
                            <input type="text" name="built" class="form-control" value="<?php echo $sale->built; ?>">                      
                        </div>

                        <div class="form-group">
                            <label for="status">公開・非公開</label>
                            <input type="text" name="status" class="form-control" value="<?php echo $sale->status; ?>">
                        </div>

                        <div class="form-group">
                            <a id="id" class="btn btn-danger" href="delete_sale.php?id=<?php echo $sale->id; ?>">Delete</a>                     
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
<?php include("includes/header.php"); ?>
<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php

    $parking = new Parking();

    if(isset($_POST['create'])) {

        if($parking) {
            
            $parking->name = $_POST['name'];
            $parking->price = $_POST['price'];
            $parking->address = $_POST['address'];
            $parking->traffic = $_POST['traffic'];
            $parking->parking_status = $_POST['parking_status'];
            
            $parking->set_file($_FILES['image']);
            $session->message("The parking {$parking->name} has been added");
            $parking->upload_photo();
            $parking->image = implode("," , $parking->image);
            $parking->save();
            
            redirect("parking.php");
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
                        駐車場新規入力
                        <!-- <small>Subheading</small> -->
                    </h1>
                    
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-md-6 col-md-offset-3">

                        <div class="form-group">
                            <label for="image">写真</label>
                            <input type="file" multiple name="image[]">
                            <p>※【ctrl】ボタンを押しながら、画像をクリックすると複数枚アップロード可能<br>
                               ※サムネイルの選択は、編集画面で操作必要
                            </p>
                        </div>

                        <div class="form-group">
                            <label for="name">駐車場名</label>
                            <input type="text" name="name" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="price">賃料</label>
                            <input type="text" name="price" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="address">住所</label>
                            <input type="text" name="address" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="station">交通</label>
                            <input type="text" name="traffic" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="parking_status">駐車場状態</label>
                            <input type="text" name="parking_status" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <input type="submit" name="create" class="btn btn-primary pull-right">
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
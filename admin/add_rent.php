<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $rent = new Rent();

    if(isset($_POST['create'])) {

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

            $rent->set_file($_FILES['image']);
            $session->message("The images has been added");
            $rent->upload_photo();
            $rent->image = implode("," , $rent->image);
            $rent->save();

            redirect("rents.php");
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
                        賃貸物件新規入力
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
                            <label for="rent_house_name">物件名</label>
                            <input type="text" name="rent_house_name" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="house_type">建物種別（アパート・マンション・戸建て）</label>
                            <input type="text" name="house_type" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_price">賃料</label>
                            <input type="text" name="rent_house_price" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="deposit">礼金/敷金</label>
                            <input type="text" name="deposit" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_layout">間取り</label>
                            <input type="text" name="rent_house_layout" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="floor">所在階/階数</label>
                            <input type="text" name="floor" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_local_station">最寄り駅</label>
                            <input type="text" name="rent_house_local_station" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_address">住所</label>
                            <input type="text" name="rent_house_address" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="rent_house_built">築年</label>
                            <input type="text" name="rent_house_built" class="form-control"> 
                        </div>

                        <div class="form-group">
                            <label for="rent_house_area">専有面積</label>
                            <input type="text" name="rent_house_area" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="contract">契約状態</label>
                            <input type="text" name="contract" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="status">公開・非公開</label>
                            <input type="text" name="status" class="form-control">
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
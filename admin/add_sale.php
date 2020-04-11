<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $sale = new Sale();

    if(isset($_POST['create'])) {

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

            $sale->set_file($_FILES['image']);
            $session->message("The sale {$sale->name} has been added");
            $sale->upload_photo();
            $parking->image = implode("," , $parking->image);
            $sale->save(); 

            redirect("sales.php");
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
                        売買物件新規入力
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
                            <label for="name">物件名</label>
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
                            <label for="land_area">土地面積</label>
                            <input type="text" name="land_area" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="building_area">建物面積</label>
                            <input type="text" name="building_area" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="per_tsubo">坪単価</label>
                            <input type="text" name="per_tsubo" class="form-control">                      
                        </div>
                        <div class="form-group">
                            <label for="layout">間取り</label>
                            <input type="text" name="layout" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="station">最寄り駅</label>
                            <input type="text" name="station" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="on_foot">徒歩何分</label>
                            <input type="text" name="on_foot" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="built">築年</label>
                            <input type="text" name="built" class="form-control">                       
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
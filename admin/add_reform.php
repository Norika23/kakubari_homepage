<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $reform = new Reform();

    if(isset($_POST['create'])) {

        if($reform) {
            
            $reform->name = $_POST['name'];
            $reform->price = $_POST['price'];
            $reform->building_type = $_POST['building_type'];
            $reform->description = $_POST['description'];
            $reform->manufacturer = $_POST['manufacturer'];
            $reform->product_type = $_POST['product_type'];

            $reform->set_file($_FILES['image']);
            $session->message("The reform {$reform->name} has been added");
            $reform->upload_photo();
            $reform->image = implode("," , $reform->image);
            $reform->save(); 
            redirect("reform.php");
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
                        リフォーム新規入力
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
                            <label for="name">リフォーム名</label>
                            <input type="text" name="name" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="price">費用</label>
                            <input type="text" name="price" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="building_type">建物タイプ</label>
                            <input type="text" name="building_type" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="manufacturer">メーカー</label>
                            <input type="text" name="manufacturer" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="product_type">タイプ</label>
                            <input type="text" name="product_type" class="form-control">                      
                        </div>

                        <div class="form-group">
                            <label for="description">詳細</label>
                            <textarea class="form-control" name="description" id="body" cols="30" rows="10"></textarea>                  
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
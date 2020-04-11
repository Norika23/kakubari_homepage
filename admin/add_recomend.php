<?php include("includes/header.php"); ?>
<?php //if(!$session->is_signed_in()) {redirect("login.php");} ?>
<?php

$classname="";
if(isset($_GET['parking'])) {
  $classname = new Parking();
}

if(isset($_GET['rent'])) {
  $classname = new rent();
}

if(isset($_GET['sale'])) {
  $classname = new sale();
}

if(isset($_GET['reform'])) {
  $classname = new reform();
}



    if(isset($_POST['create'])) {

        if($classname) {
            
            $classname->name = $_POST['name'];
            $classname->price = $_POST['price'];
            $classname->address = $_POST['address'];
            $classname->traffic = $_POST['traffic'];
            
            $classname->set_file($_FILES['image']);
            $session->message("The classname {$classname->name} has been added");
            $classname->upload_photo();
            $classname->image = implode("," , $classname->image);
            $classname->save();
            
            redirect("classname.php");
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
                        おすすめ新規入力
                        <!-- <small>Subheading</small> -->
                    </h1>
                    
                    <form action="" method="post" enctype="multipart/form-data">

                    <div class="col-md-6 col-md-offset-3">

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
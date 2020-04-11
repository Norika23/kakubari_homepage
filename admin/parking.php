<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $parkings = Parking::find_all();

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
                        parkings                      
                    </h1>
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                    <a href="add_parking.php" class="btn btn-primary">駐車場追加</a>

                    <div class="col-md-12">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>サムネイル</th>
                                    <th>駐車場名</th>
                                    <th>賃料</th>
                                    <th>住所</th>
                                    <th>交通</th>
                                    <th>満車・空き有</th>
                                    <th>公開・非公開</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($parkings as $parking) : ?>
                                <tr>
                                    <td><?php echo $parking->id; ?></td>
                                    <td><img class="admin-user-thumbnail user_image" src="<?php echo $parking->thumb_image_path_and_placeholder(); ?>" alt=""></td>
                                    
                                    <td><?php echo $parking->name; ?>
                                
                                        <div class="action_links">

                                            <a href="edit_parking.php?parking&id=<?php echo $parking->id; ?>"><h4 class="btn btn-primary">編集</h4></a>
                                                                                  
                                        </div>
                                
                                    </td>
                                    <td><?php echo $parking->price; ?></td>
                                    <td><?php echo $parking->address; ?></td>
                                    <td><?php echo $parking->traffic; ?></td>
                                    <td><?php echo $parking->parking_status; ?></td>
                                    <td><?php echo $parking->status; ?></td>
                                </tr>

                            <?php endforeach; ?>
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
            <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

  <?php include("includes/footer.php"); ?>
<?php include("includes/header.php"); ?>

<?php //if(!$session->is_signed_in()) {redirect("login.php");} ?>

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
                        おすすめ情報
                        
                    </h1>
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                    <a href="add_recomend.php?rent" class="btn btn-primary">賃貸追加</a>
                    <a href="add_recomend.php?sale" class="btn btn-primary">売買追加</a>
                    <a href="add_recomend.php?parking" class="btn btn-primary">駐車場追加</a>
                    <a href="add_recomend.php?reform" class="btn btn-primary">リフォーム追加</a>
                    <div class="col-md-12">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ジャンル</th>
                                    <th>Id</th>
                                    <th>サムネイル</th>
                                    <th>名前</th>
                                    <th>料金</th>
                                    <th>説明</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($parkings as $parking) : ?>
                                <tr>
                                    <td><?php echo $parking->id; ?></td>
                                    <td><img class="admin-user-thumbnail user_image" src="<?php echo $parking->thumb_image_path_and_placeholder(); ?>" alt=""></td>
                                    
                                    <td><?php echo $parking->name; ?>
                                
                                        <div class="action_links">
                                            
                                            <a href="delete_parking.php?id=<?php echo $parking->id; ?>">Delete</a>
                                            <a href="edit_parking.php?parking&id=<?php echo $parking->id; ?>">Edit</a>
                                            
                                        
                                        </div>
                                
                                    </td>
                                    <td><?php echo $parking->price; ?></td>
                                    <td><?php echo $parking->address; ?></td>
                                    <td><?php echo $parking->traffic; ?></td>
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
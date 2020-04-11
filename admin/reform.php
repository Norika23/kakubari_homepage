<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $reforms = Reform::find_all();

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
                        Reform
                        
                    </h1>
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                    <a href="add_reform.php" class="btn btn-primary">リフォーム追加</a>

                    <div class="col-md-12">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>サムネイル</th>
                                    <th>リフォーム名</th>
                                    <th>費用</th>
                                    <th>建物タイプ</th>
                                    <th>メーカー</th>
                                    <th>商品タイプ</th>
                                    <th>詳細</th>
                                    <th>公開・非公開</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($reforms as $reform) : ?>
                                <tr>
                                    <td><?php echo $reform->id; ?></td>
                                    <td><img class="admin-user-thumbnail user_image" src="<?php echo $reform->thumb_image_path_and_placeholder(); ?>" alt=""></td>
                                    
                                    <td><?php echo $reform->name; ?>
                                
                                        <div class="action_links">

                                            <a href="edit_reform.php?reform&id=<?php echo $reform->id; ?>"><h4 class="btn btn-primary">編集</h4></a>                                       
                                        
                                        </div>
                                
                                    </td>
                                    <td><?php echo $reform->price; ?></td>
                                    <td><?php echo $reform->building_type; ?></td>
                                    <td><?php echo $reform->manufacturer; ?></td>
                                    <td><?php echo $reform->product_type; ?></td>
                                    <td><?php echo $reform->description; ?></td>
                                    <td><?php echo $reform->status; ?></td>
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
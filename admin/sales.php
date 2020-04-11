<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $sales = Sale::find_all();

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
                        Sales                     
                    </h1>
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                    <a href="add_sale.php" class="btn btn-primary">売買追加</a>

                    <div class="col-md-12">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>写真</th>
                                    <th>物件名</th>
                                    <th>販売価格</th>
                                    <th>住所</th>
                                    <th>土地面積</th>
                                    <th>建物面積</th>
                                    <th>坪単価</th>
                                    <th>間取り</th>
                                    <th>最寄り駅</th>
                                    <th>徒歩</th>
                                    <th>築年</th>
                                    <th>公開・非公開</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($sales as $sale) : ?>
                                <tr>
                                    <td><?php echo $sale->id; ?></td>
                                    <td><img class="admin-user-thumbnail user_image" src="<?php echo $sale->image_path_and_placeholder(); ?>" alt=""></td>
                                    <td><?php echo $sale->name; ?>
                                        <div class="action_links">
                                            <a href="edit_sale.php?sale&id=<?php echo $sale->id; ?>"><h4 class="btn btn-primary">編集</h4></a>                                          
                                        </div>
                                    </td>
                                    <td><?php echo $sale->price; ?></td>
                                    <td><?php echo $sale->address; ?></td>
                                    <td><?php echo $sale->land_area; ?></td>
                                    <td><?php echo $sale->building_area; ?></td>
                                    <td><?php echo $sale->per_tsubo; ?></td>
                                    <td><?php echo $sale->layout; ?></td>
                                    <td><?php echo $sale->station; ?></td>
                                    <td><?php echo $sale->on_foot; ?></td>
                                    <td><?php echo $sale->built; ?></td>
                                    <td><?php echo $sale->status; ?></td>
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
<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<?php

    $rents = Rent::find_all();

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
                        Rents             
                    </h1>
                    <p class="bg-success">
                        <?php echo $message; ?>
                    </p>
                    <a href="add_rent.php" class="btn btn-primary">賃貸追加</a>

                    <div class="col-md-12">
                    
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>サムネイル</th>
                                    <th>物件名</th>
                                    <th>建物種別</th>
                                    <th>賃料/管理費</th>
                                    <th>礼金/敷金</th>
                                    <th>間取り</th>
                                    <th>所在階/階数</th>
                                    <th>最寄り駅</th>
                                    <th>住所</th>
                                    <th>築年</th>
                                    <th>専有面積</th>
                                    <th>契約状態</th>
                                    <th>公開・非公開</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($rents as $rent) : ?>
                                <tr>
                                    <td><?php echo $rent->id; ?></td>
                                    <td><img class="admin-user-thumbnail user_image" src="<?php echo $rent->thumb_image_path_and_placeholder(); ?>" alt=""></td>
                                    <td><?php echo $rent->rent_house_name; ?>                               
                                        <div class="action_links">                                    
                                        <a href="edit_rent.php?rent&id=<?php echo $rent->id; ?>"><h4 class="btn btn-primary">編集</h4></a>
                                        </div>
                                    </td>
                                    <td><?php echo $rent->house_type; ?></td>
                                    <td><?php echo $rent->rent_house_price; ?></td>
                                    <td><?php echo $rent->deposit; ?></td>
                                    <td><?php echo $rent->rent_house_layout; ?></td>
                                    <td><?php echo $rent->floor; ?></td>
                                    <td><?php echo $rent->rent_house_local_station; ?></td>
                                    <td><?php echo $rent->rent_house_address; ?></td>
                                    <td><?php echo $rent->rent_house_built; ?></td>
                                    <td><?php echo $rent->rent_house_area; ?></td>
                                    <td><?php echo $rent->contract; ?></td>
                                    <td><?php echo $rent->status; ?></td>
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
<?php

$class_name = new Db_object;

?>


<div class="container-fluid">

<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Welcome to Admin Dashboard
        </h1>                      
    </div>
</div>

    <!-- /.row -->
    
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class='huge'><?php echo $rent_count = $class_name->recordCount('rents') ?></div>
                        <div>Rents</div>
                    </div>
                </div>
            </div>
            <a href="rents.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div class='huge'><?php echo $sale_count = $class_name->recordCount('sales') ?></div>
                      <div>Sales</div>
                    </div>
                </div>
            </div>
            <a href="sales.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div class='huge'><?php echo $parking_count = $class_name->recordCount('parking') ?></div>
                        <div> Parkings</div>
                    </div>
                </div>
            </div>
            <a href="parking.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                    <div class='huge'><?php echo $reform_count = $class_name->recordCount('reform') ?></div>
                         <div>Reforms</div>
                    </div>
                </div>
            </div>
            <a href="reform.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
    <!-- /.row -->


    <?php


        $public_rents = $class_name->checkStatus('rents','status','公開');

        $public_sales = $class_name->checkStatus('sales','status','公開');

        $public_parkings = $class_name->checkStatus('parking','status','公開');

        $public_reforms = $class_name->checkStatus('reform', 'status','公開');


    ?>



<div class="row">

    <script type="text/javascript">
          google.charts.load('current', {'packages':['bar']});
          google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ['Data', 'Count'],

                <?php

                    $element_text = ['All Rents', 'Public Rents', 'All sales', 'Public sales', 'All Parkings', 'Public Parkings', 'All Reforms', 'Public Reforms'];
                    $element_count = [$rent_count, $public_rents, $sale_count, $public_sales, $parking_count, $public_parkings, $reform_count, $public_reforms];

                    for($i=0; $i<8; $i++) {

                        echo  "['{$element_text[$i]}'" . "," . "{$element_count[$i]}],";

                    }

                ?>


             // ['Posts', 1000],

            ]);

            var options = {
              chart: {
                title: '',
                subtitle: '',
              }
            };

            var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

            chart.draw(data, google.charts.Bar.convertOptions(options));
          }
        </script>


    <div id="columnchart_material" style="width: 'auto'; height: 500px;"></div>


</div>



</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

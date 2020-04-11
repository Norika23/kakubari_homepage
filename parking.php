<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;

$items_per_page =10;

$items_total_count = Parking::count_all();

$paginate = new Paginate($page,$items_per_page,$items_total_count);

$sql = "SELECT * FROM parking WHERE status = '公開' ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()} ";

$parkings = Parking::find_by_query($sql);

?>

<div id="contents">

<div id="main">

<section>

<h2>駐車場情報</h2>

<?php foreach($parkings as $parking): ?>

<div class="list">
<a href="detail_parking.php?id=<?php echo $parking->id; ?>">
<h4><?php echo $parking->name; ?></h4>

<!-- <h4><?php //var_dump($parking->image); ?></h4> -->

<figure><img width="200px" height="200" src="admin/<?php echo $parking->thumb_image_path_and_placeholder(); ?>" alt="" /></figure>

<table>
<tr>
<th>賃料</th>
<td><?php echo $parking->price; ?></td>
</tr>
<tr>
<th>住所</th>
<td><?php echo $parking->address; ?></td>
</tr>
<tr>
<th>最寄駅／交通</th>
<td><?php echo $parking->traffic; ?></td>
</tr>
</table>
</a>
</div>
<?php endforeach; ?>
</section>
<!--list-->

<ul class="pager">

<?php

if($paginate->page_total() > 1) {

    if($paginate->has_next()){

        echo "<li class='next'><a href='parking.php?page={$paginate->next()}'>Next</a></li>";

    }

    for ($i=1; $i <= $paginate->page_total(); $i++) { 
        
        if($i == $paginate->current_page) {

           echo "<li class='active'><a href='parking.php?page={$i}'>{$i}</a></li>";

        } else {

            echo "<li><a href='parking.php?page={$i}'>{$i}</a></li>";

        }

    }

    if($paginate->has_previous()){

        echo "<li class='previous'><a href='parking.php?page={$paginate->previous()}'>Previous</a></li>";

    }

}

?>

</ul>   

</div>
</div>
<!--/main-->

<?php ////include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

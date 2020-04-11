<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>
<?php

    $sql = "SELECT * FROM sales WHERE status = '公開'  ";
    $sales = Sale::find_by_query($sql);

?>
<div id="contents">

<div id="main">

<section>

<h2>売買物件情報</h2>

<?php foreach($sales as $sale): ?>

<div class="list">
<a href="detail_sale.php?id=<?php echo $sale->id; ?>">
<h4><?php echo $sale->name; ?></h4>
<div id="big">
<figure><img width="200px" height="200" src="admin/<?php echo $sale->thumb_image_path_and_placeholder(); ?>" alt="" /></figure>
</div>

<table>
<tr>
<th>賃料</th>
<td><?php echo $sale->price; ?></td>
<th>住所</th>
<td><?php echo $sale->address; ?></td>
</tr>
<tr>
<th>間取り</th>
<td><?php echo $sale->layout; ?></td>
<th>築年</th>
<td><?php echo $sale->built; ?></td>
</tr>
<tr>
<th>最寄駅／交通</th>
<td><?php echo $sale->station; ?></td>
<th>土地面積</th>
<td><?php echo $sale->land_area; ?></td>
</tr>
<th>坪単価</th>
<td><?php echo $sale->per_tsubo; ?></td>
<th>建物面積</th>
<td><?php echo $sale->building_area; ?></td>
</tr>
</table>
</a>
</div>

<?php endforeach; ?>

</section>
<!--list-->

</div>
<!--/main-->

<?php //include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

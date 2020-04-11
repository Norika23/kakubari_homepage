<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php

    $sql = "SELECT * FROM rents WHERE status = '公開' ";
    $rents = Rent::find_by_query($sql);

?>

<div id="contents">

<div id="main">

<section>
<h2>賃貸物件情報</h2>

<?php foreach($rents as $rent): ?>

<div class="list">
<a href="detail_rent.php?id=<?php echo $rent->id; ?>">
<h4><?php echo $rent->rent_house_name; ?></h4>
<figure><img width="200px" height="200" src="admin/<?php echo $rent->thumb_image_path_and_placeholder(); ?>" alt="" /></figure>
<?php ?>
<table>
<tr>
<th>賃料/管理費</th>
<td><?php echo $rent->rent_house_price; ?></td>
<th>所在地</th>
<td><?php echo $rent->rent_house_address; ?></td>
</tr>
<tr>
<th>敷金/礼金</th>
<td><?php echo $rent->deposit; ?></td>
<th>所在階/階数</th>
<td><?php echo $rent->floor; ?></td>
</tr>
<tr>
<th>最寄駅／交通</th>
<td><?php echo $rent->rent_house_local_station; ?></td>
<th>築年</th>
<td><?php echo $rent->rent_house_built; ?></td>
</tr>
<tr>
<th>間取り</th>
<td><?php echo $rent->rent_house_layout; ?></td>
<th>専有面積</th>
<td><?php echo $rent->rent_house_area; ?></td>
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

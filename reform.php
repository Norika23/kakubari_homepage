<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php
    $sql = "SELECT * FROM reform WHERE status = '公開'  ";
    $reforms = Reform::find_by_query($sql);
?>
<div id="contents">

<div id="main">

<section>

<h2>リフォーム</h2>
<?php foreach($reforms as $reform): ?>
<div class="list_reform">
<h4><?php echo $reform->name; ?></h4>
<a href="detail_reform.php?id=<?php echo $reform->id; ?>">
<figure><img class="list_img" src="admin/<?php echo $reform->thumb_image_path_and_placeholder(); ?>" alt=""></figure>
</a>
</div>

<?php endforeach; ?>

</section>
<!-- list -->

</div>
<!--/main-->

<?php ////include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

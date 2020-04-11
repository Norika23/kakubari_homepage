<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php $sale = Sale::find_by_id($_GET['id']); ?>

<div id="contents">

<div id="main">

<article>

<h2><?php echo $sale->name; ?></h2>

	<figure class="mb15 c">
		<div id="big">
			<img src="admin/<?php echo $sale->thumb_image_path_and_placeholder(); ?>" alt="">
		</div>
	</figure>
	<div id="navi">
		<ul>
			<?php 
			$sale->image = explode(',',$sale->image);
			for($i = 0; $i < count($sale->image); $i++ ){ 
				
				echo '<li><a href="admin/'.$sale->picture_path_all($i).'"><img src="admin/'.$sale->picture_path_all($i) .'"></a></li>';
						
			} ?>
		</ul>
	</div>
	<table class="ta1">
		<tr>
		<th colspan="2" class="tamidashi"><?php echo $sale->name; ?></th>
		</tr>
		<tr>
		<th>販売価格</th>
		<td><?php echo $sale->price; ?></td>
		</tr>
		<tr>
		<th>住所</th>
		<td><?php echo $sale->address; ?></td>
		</tr>
		<tr>
		<th>間取り</th>
		<td><?php echo $sale->layout; ?></td>
		</tr>
		<tr>
		<th>築年</th>
		<td><?php echo $sale->built; ?></td>
		</tr>
		<tr>
		<th>最寄駅／交通</th>
		<td><?php echo $sale->station; ?></td>
		</tr>
		<th>土地面積</th>
		<td><?php echo $sale->land_area; ?></td>
		</tr>
		<th>建物面積</th>
		<td><?php echo $sale->building_area; ?></td>
		</tr>
		<th>徒歩</th>
		<td><?php echo $sale->on_foot; ?></td>
		</tr>
		<th>坪単価</th>
		<td><?php echo $sale->per_tsubo; ?></td>
		</tr>
	</table>

<p class="c">
<a href="contact.php?c&sid=<?php echo $sale->id; ?>"><input type="submit" value="この物件に問い合わせをする" /></a>
</p>

</article>

<p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>

</div>
<!--/main-->

<?php ////include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

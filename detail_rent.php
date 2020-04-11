<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php $rent = Rent::find_by_id($_GET['id']); ?>

<div id="contents">

<div id="main">

<article>

<h2><?php echo $rent->rent_house_name; ?></h2>

<figure class="mb15 c">
<div id="big">
<img src="admin/<?php echo $rent->thumb_image_path_and_placeholder(); ?>" alt="写真の説明を入れます">
</div>
</figure>
	<div id="navi">
		<ul>
			<?php 
			$rent->image = explode(',',$rent->image);
			for($i = 0; $i < count($rent->image); $i++ ){ 
				
				echo '<li><a href="admin/'.$rent->picture_path_all($i).'"><img src="admin/'.$rent->picture_path_all($i) .'"></a></li>';
						
			} ?>
		</ul>
	</div>
	<table class="ta1">
		<tr>
		<th colspan="2" class="tamidashi"><?php echo $rent->rent_house_name; ?></th>
		</tr>
		<tr>
		<th>建物種別</th>
		<td><?php echo $rent->house_type; ?></td>
		</tr>
		<tr>
		<th>賃料</th>
		<td><?php echo $rent->rent_house_price; ?></td>
		</tr>
		<tr>
		<th>礼金/敷金</th>
		<td><?php echo $rent->deposit; ?></td>
		</tr>
		<tr>
		<th>住所</th>
		<td><?php echo $rent->rent_house_address; ?></td>
		</tr>
		<tr>
		<th>間取り</th>
		<td><?php echo $rent->rent_house_layout; ?></td>
		</tr>
		<tr>
		<th>所在階/階数</th>
		<td><?php echo $rent->floor; ?></td>
		</tr>
		<tr>
		<th>築年</th>
		<td><?php echo $rent->rent_house_built; ?></td>
		</tr>
		<tr>
		<th>最寄駅／交通</th>
		<td><?php echo $rent->rent_house_local_station; ?></td>
		</tr>
		<th>専有面積</th>
		<td><?php echo $rent->rent_house_area; ?></td>
		</tr>
	</table>

<p class="c">
<a href="contact.php?c&rid=<?php echo $rent->id; ?>"><input type="submit" value="この物件に問い合わせをする" /></a>
</p>

</article>

<p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>

</div>
<!--/main-->

<?php //include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

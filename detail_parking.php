<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php $parking = Parking::find_by_id($_GET['id']); ?>

<div id="contents">
	<div id="main">

	<article>

		<h2><?php echo $parking->name; ?></h2>
			
			<figure class="mb15 c">
				<div id="big">
					<img src="admin/<?php echo $parking->thumb_image_path_and_placeholder(); ?>" alt="">
				</div>
			</figure>

			<div id="navi">
				<ul>
					<?php 
					$parking->image = explode(',',$parking->image);
					for($i = 0; $i < count($parking->image); $i++ ){ 
						
						echo '<li><a href="admin/'.$parking->picture_path_all($i).'"><img src="admin/'.$parking->picture_path_all($i) .'"></a></li>';
								
					} ?>
				</ul>
			</div>

			<table class="ta1">
				<tr>
				<th colspan="2" class="tamidashi">   <?php echo $parking->name; ?></th>
				</tr>
				<tr>
				<th>賃料</th>
				<td><?php echo $parking->price; ?>円</td>
				</tr>
				<tr>
				<th>住所</th>
				<td><?php echo $parking->address; ?></td>
				</tr>
				<tr>
				<th>最寄駅／交通</th>
				<td><?php echo $parking->traffic; ?></td>
				</tr>
				<th>駐車場状態</th>
				<td><?php echo $parking->parking_status; ?></td>
				</tr>
			</table>

<p class="c">
<a href="contact.php?c&pid=<?php echo $parking->id; ?>"><input type="submit" value="この物件に問い合わせをする" /></a>
</p>

</article>

<p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>

</div>
<!--/main-->

<?php //include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

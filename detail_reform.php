<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php $reform = Reform::find_by_id($_GET['id']); ?>


<div id="contents">

<div id="main">

<article>

<h2><?php echo $reform->name; ?></h2>


<figure class="mb15 c">
    <div id="big">
        <img src="admin/<?php echo $reform->thumb_image_path_and_placeholder(); ?>" alt="">
    </div>
</figure>

<div id="navi">
    <ul>
    <?php 
    $reform->image = explode(',',$reform->image);
    for($i = 0; $i < count($reform->image); $i++ ){ 
        
        echo '<li><a href="admin/'.$reform->picture_path_all($i).'"><img src="admin/'.$reform->picture_path_all($i) .'"></a></li>';
                
    } ?>
    </ul>
</div>

    <table class="ta1">
        <tr>
        <th colspan="2" class="tamidashi"><?php echo $reform->name; ?></th>
        </tr>
        <tr>
        <th>費用</th>
        <td><?php echo $reform->price; ?></td>
        </tr>
        <tr>
        <th>建物タイプ</th>
        <td><?php echo $reform->building_type; ?></td>
        </tr>
        <tr>
        <th>メーカー</th>
        <td><?php echo $reform->manufacturer; ?></td>
        </tr>
        <tr>
        <th>商品タイプ</th>
        <td><?php echo $reform->product_type; ?></td>
        </tr>
        <tr>
        <th>詳細</th>
        <td><?php echo $reform->description; ?></td>
        </tr>
    </table>

<p class="c">
<a href="contact.php?c&fid=<?php echo $reform->id; ?>"><input type="submit" value="この物件に問い合わせをする" /></a>
</p>

</article>

<p><a href="javascript:history.back()">&lt;&lt; 前のページに戻る</a></p>

</div>
<!--/main-->

<?php //include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>

<?php

if(isset($_POST['submit'])) {

    $to = "abcmnoyz23@gmail.com";
    $subject = wordwrap($_POST['subject'], 70);
    $body = "<html>お問い合わせ概要<br> ".$_POST['oerview']."<br>";
    if(isset($_POST['from_detail'])){ 
    $body .= "<br>お問い合わせ情報<br> ".$_POST['from_detail']."<br>"; 
    }
    $body .= "<br>お問い合わせ詳細<br> ".$_POST['body']."</html>";
    $header = "From: " .$_POST['email'];
    $header .= "\r\n";
    $header .= "Content-type: text/html; charset=UTF-8";
 
    mail("$to", "$subject", $body, $header);

}


?>

<div id="c-contents">


<section>
<form action="" method="post" autocomplete="off">
<table class="ta1">
<tr>
<th colspan="2" class="tamidashi">　お問い合わせ</th>
</tr>
<tr>
<th>お名前※</th>
<td><input type="text" name="subject" size="30" class="ws" required></td>
</tr>
<tr>
<th>メールアドレス※</th>
<td><input type="email" name="email" size="30" class="ws" required></td>
</tr>

<tr>
<th>お問い合わせ概要</th>
<td>
<label><input type="text" name="oerview" size="30" class="ws" ></label><br>
</td>
</tr>
<?php if (isset($_GET['c'])) { ?>

<tr>
<th>お問い合わせ情報</th>
<td>
<label><input type="text" name="from_detail" 
value="<?php 

    if(isset($_GET['rid'])) {
        $rent = Rent::find_by_id($_GET['rid']);
        echo $rent->rent_house_name;
    } elseif(isset($_GET['sid'])) {
        $sale = Sale::find_by_id($_GET['sid']);
        echo $sale->name;
    } elseif(isset($_GET['pid'])) {
        $parking = Parking::find_by_id($_GET['pid']);
        echo $parking->name;
    } elseif(isset($_GET['fid'])) {
        $reform = Reform::find_by_id($_GET['fid']);
        echo $reform->name.'リフォーム';
    }
?>" >
</label><br>
</td>
</tr>

<?php  }

?>
<tr>
<th>お問い合わせ詳細※</th>
<td><textarea name="body" cols="30" rows="10" class="wl" required></textarea></td>
</tr>
</table>

<p class="c">
<input type="submit" name="submit" value="内容を送信する">
</p>
</form>
</section>


<p id="pagetop"><a href="#">↑ PAGE TOP</a></p>

</div>


<?php include("includes/footer.php"); ?>

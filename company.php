<?php include("includes/header.php"); ?>
<?php include("includes/navigation.php"); ?>


<div id="contents">

<div id="main">

<section>

<h2 class="mb15">会社概要</h2>

<table class="ta1">
<tr>
<th>見出し</th>
<td><a href="https://template-party.com/file/pickup_googlemap.html" target="_blank">GoogleMapで地図を貼り付けたい</a>人は解説がありますのでご覧下さい。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
<tr>
<th>見出し</th>
<td>ここに説明など入れて下さい。サンプルテキスト。</td>
</tr>
</table>

</section>

<section id="about">

<h2>当テンプレートについて</h2>

<h3>当テンプレートはhtml5+CSS3(レスポンシブWEBデザイン)です</h3>
<p>当テンプレートは、パソコン、スマホ、タブレットでhtml共通のレスポンシブWEBデザインになっております。<br>
古いブラウザ（※特にIE8以下）で閲覧した場合にCSSの一部が適用されない（角を丸くする加工やグラデーションなどの加工等）のでご注意下さい。</p>

<h3>各デバイスごとのレイアウトチェックは</h3>
<p>最終的なチェックは実際のタブレットやスマホで行うのがおすすめですが、臨時チェックは最新のブラウザ(IEならIE10以降)で行う事もできます。ブラウザの幅を狭くしていくと、各端末サイズに合わせたレイアウトになります。</p>
<p>注意：cssはリアルタイムで反映されますが、javascript(js)は<span class="color1">ブラウザを再読み込み</span>させないと反映されないので、レイアウトが切り替わったらブラウザを再読み込みさせる事をおすすめします。javascriptは小さい端末用の開閉ブロックなどに使われています。</p>

<h3>各デバイス用のスタイル変更は</h3>
<p>cssフォルダのstyle.cssファイルで行って下さい。詳しい説明も入っています。<br>
前半はパソコン環境を含めた全端末の共通設定になります。中盤以降、各端末向けのスタイルが追加設定されています。<br>
media=&quot; (～)&quot;の「～」部分でcssを切り替えるディスプレイのサイズを設定しています。ここは必要に応じて変更も可能ですが、変更した場合、htmlの下部のjavascriptのウィンドウサイズの条件指定も合わせて変更しなくてはならないものもあります。</p>

<h3>小さい端末（※幅800px以下）の環境でのみ</h3>
<p>メインメニューが折りたたみ式（３本バーアイコン化）になります。<br>
バーのスタイル設定はstyle.cssの、<br>
<strong>「/*３本バーアイコン設定」</strong><br>
で行う事ができます。</p>

<h3>ロゴなどの画像ベースは</h3>
<p>「base」フォルダに入っていますので必要な場合はご利用下さい。<br>
画像の元素材を当社運営の<a href="http://photo-chips.com/">PHOTO-CHIPS</a>や<a href="http://decoruto.com/">DECORUTO</a>で配布している場合もございます。</p>

</section>

<section>

<h2>当テンプレートの使い方</h2>

<h3 class="color1">注意：当テンプレートにはメインメニューが「２箇所」入っています</h3>
<p>パソコンなどの大きな端末向け「<strong class="color1">menubar（幅801px以上）</strong>」と、スマホなどの小さな端末向け「<strong class="color1">menubar-s（幅800px以下）</strong>」がそれぞれ入っています。大きな端末向けは編集ソフトで見れると思いますが、小さな端末向けは見えないと思いますのでhtml側で編集して下さい。</p>

<h3>titleタグ、metaタグ、copyright、他の設定</h3>
<p><strong class="color1">■titleタグの設定はとても重要です。念入りにワードを選んで適切に入力しましょう。</strong><br>
まず、htmlソースが見れる状態にして、<br>
<span class="look">&lt;title&gt;不動産業者向け 無料ホームページテンプレート tp_biz31_fudosan&lt;/title&gt;</span><br>
を編集しましょう。<br>
あなたのホームページ名が「サンプル不動産」だとすれば、<br>
<span class="look">&lt;title&gt;サンプル不動産&lt;/title&gt;</span><br>
とすればＯＫです。SEO対策もするなら冒頭に重要なワードを入れておきましょう。</p>
<p><strong class="color1">■metaタグを変更しましょう。</strong><br>
titleタグのすぐ下に、<br>
  <span class="look">content=&quot;ここにサイト説明を入れます&quot;</span><br>
  という部分がありますので、テキストをサイトの説明文に入れ替えます。検索結果の文面に使われる場合もありますので、見た人が来訪したくなるような説明文を簡潔に書きましょう。</p>
<p>続いて、その下の行の<br>
<span class="look">content=&quot;キーワード１,キーワード２,～～～&quot;</span><br>
も設定します。ここはサイトに関係のあるキーワードを入れる箇所です。10個前後ぐらいあれば充分です。キーワード間はカンマ「,」で区切ります。</p>
<p><strong class="color1">■copyrightを変更しましょう。</strong><br>
htmlの下の方にある、<br>
<span class="look">Copyright&copy; サンプル不動産 All Rights Reserved.</span><br>
もあなたのサイト名に変更します。</p>
<p><strong class="color1">■ロゴ画像のaltタグも変更しましょう。</strong><br>
html側の、<br>
<span class="look">alt=&quot;サンプル不動産&quot;</span><br>
もあなたのサイト名に変更しましょう。</p>

<h3>トップページのスライドショーについて</h3>
<p><strong class="color1">■画像を入れ替えたい場合</strong><br>
「image1.jpg」「image2.jpg」「image3.jpg」の３枚のjpg画像を用意してimagesフォルダに上書きして下さい。大きさはバラバラでも構いませんが、必ず「縦横比」を合わせて下さい。拡張子が「jpeg」や「JPG」と少し違った場合にうまく表示できないブラウザもあるので「jpg」で統一して下さい。「jpg」にできない場合はhtml側の拡張子指定を合わせてもらっても構いません。</p>
<p><strong class="color1">■１回でループをストップさせたい場合</strong><br>
現在、無限ループになっていますが１回でストップさせたい場合、cssフォルダのslide.cssの「実行する回数」に指定されている「infinite」を「1」に変更、「@keyframes slide3」の100%の「opacity: 0;」を「opacity: 1;」に変更して下さい。</p>
<p><strong class="color1">■速度や枚数などの調整</strong><br>
cssフォルダのslide.cssで行って下さい。解説も入っています。<br>
<a href="https://template-party.com/tips/tips20160408_css_slide1.html">スライドショーに関する詳しい使い方はこちら。</a></p>
<p><strong class="color1">■css3に対応した環境でしか動作しません。</strong><br>
css3に対応していない古い環境（IEなら8以下）から見た場合、最後の画像のみが固定表示される事になります。</p>
<p><strong class="color1">■固定画像にしたい場合</strong><br>
index.htmlのhtmlの上の方にある、<br>
&lt;link rel=&quot;stylesheet&quot; href=&quot;css/slide.css&quot;&gt;<br>
の１行を削除。<br>
画像がすべて表示されるので、使わない画像を削除すればOKです。画像を囲っているasideタグなどはレイアウト設定が入っているので削除しないよう注意して下さい。</p>

<h3>スマホなどの小さな端末からボタンクリックでPC画面を表示させたい方へ</h3>
<p>レスポンシブデザインだと、スマホやタブレットなどの小さな端末から見た場合はそれ専用のレイアウトに変わりますが、あえてPC画面も見せたいユーザーの為に<a href="https://template-party.com/tips/tips20160916viewport.html">tipsを公開</a>しました。	</p>

<h3>プレビューでチェックすると警告メッセージが出る場合(一部ブラウザ対象)</h3>
<p>主にjavascript（jsファイル）ファイルによって出る警告ですが、WEB上では出ません。また、この警告が出ている間は効果を見る事ができないので、警告メッセージ内でクリックして解除してあげて下さい。これにより効果がちゃんと見れるようになります。</p>

</section>

</div>
<!--/main-->

<div id="sub">

<nav class="box1">
<h2>SUB MENU</h2>
<ul>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
</ul>
</nav>

<nav>
<h2>SUB MENU</h2>
<ul>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
<li><a href="#">サブメニュー</a></li>
</ul>
</nav>

<section class="mb15">

<h2>おすすめ情報</h2>
<div class="box2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="ＸＸアパート"></figure>
<h4>Ｘアパート55,000円</h4>
<p>ここに物件の説明を入れます。サンプルテキスト。</p>
</a>
</div>

<div class="box2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="ＸＸアパート"></figure>
<h4>Ｘアパート55,000円</h4>
<p>ここに物件の説明を入れます。サンプルテキスト。</p>
</a>
</div>

<div class="box2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="ＸＸアパート"></figure>
<h4>Ｘアパート55,000円</h4>
<p>ここに物件の説明を入れます。サンプルテキスト。</p>
</a>
</div>

<div class="box2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="ＸＸアパート"></figure>
<h4>Ｘアパート55,000円</h4>
<p>ここに物件の説明を入れます。サンプルテキスト。</p>
</a>
</div>

<div class="box2">
<a href="item.html">
<figure><img src="images/sample1.jpg" alt="ＸＸアパート"></figure>
<h4>Ｘアパート55,000円</h4>
<p>ここに物件の説明を入れます。サンプルテキスト。</p>
</a>
</div>

</section>

</div>

<?php //include("includes/sidebar.php"); ?>
<!--/sub-->

<?php include("includes/footer.php"); ?>

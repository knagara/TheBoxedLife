<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="Androidゲームアプリ「窮屈な人生」 - あなたの窮屈な人生をゲームにしました。理不尽に見えますが、発想を転換するとクリアできる知恵の輪のようなゲームです。">
<meta name="keywords" content="Android,Androidアプリ,Androidゲーム,Androidゲームアプリ,アプリ,窮屈な人生,知恵の輪,永良,永良慶太,ながらけいた,Keita Nagara">
<title>隠しステージ２ スコアランキング | 窮屈な人生 Androidゲームアプリ | クックソニア</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/hint.css">
<link rel="stylesheet" href="css/ranking1.css">

<script src='http://a.adimg.net/javascripts/AdLantisLoader.js' type='text/javascript' charset='utf-8'></script>
<!-- AdStir
<script type="text/javascript">
var adstir_vars = {
  app_id : "MEDIA-7c76f8ad",
  ad     : "adstirtag1",
};
</script>
<script type="text/javascript" src="http://js.ad-stir.com/js/adstir.js?2011112201"></script>
AdStir END -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script src="js/jCarousel.js" type="text/javascript"></script>
<script type="text/javascript">
function doScroll(){
 if(window.pageYOffset === 0){
  window.scrollTo(0,1);
 }
}
window.onload = function(){
 setTimeout(doScroll, 100);
}

$(function(){








});
</script>
<meta name="format-detection" content="telephone=no">
<script type="text/javascript">
<!--
/* adMakerSettings */

var adMakerSettings = {
	ads:[
		{
			positionId:"admaker1", // 1.2 パラメータの設定方法 *1 参照
			androidAdUrl:"http://images.ad-maker.info/apps/edb855a23c2cb919268d.html", // 1.2 パラメータの設定方法 *2 参照
			iPhoneAdUrl:"", // 1.2 パラメータの設定方法 *3 参照
			overlay:false, // 1.2 パラメータの設定方法 *4 参照
		},
	]
};

-->
</script>
<script src="http://images.ad-maker.info/js/admaker_browser.js" type="text/javascript"></script>
</head>



<body>

<?php
//初期設定
mb_language("japanese");
mb_internal_encoding("UTF-8");
//DB接続
require_once '/home/cooksonia/db.php';
$con = mysql_connect($dsn['host'],$dsn['user'],$dsn['pass']) or die('Could not connt: ' . mysql_error());
$database  = $dsn['database'];
mysql_select_db($database, $con) or die('Could not select database');
$table  = $dsn['rankS2_t'];

//MySQLのクライアントの文字コードをutf8,sjisに設定
//mysql_query("SET NAMES sjis")
//or die("can not SET NAMES sjis");
//mysql_set_charset('ujis');


//POST受け取り確認
if (isset($_POST["submit_morika"]))
{ 
	$score = $_POST["score"];
	$name = htmlspecialchars($_POST["name"]);
	$comment = htmlspecialchars($_POST["comment"]);
	//echo '名前：'.$name.'　ひとこと：'.$comment;
	$sql = "INSERT INTO $table (score, name, comment) VALUES ($score,\"$name\",\"$comment\")";
	$result_flag = mysql_query($sql);

	if (!$result_flag) {
	    echo '<br>スコア登録に失敗しました。: ' . mysql_error();
		echo '<br><br>';
	}

}

?>
<header id="top">
  <h1><img src="images/top_bg_sp.jpg" width="320" height="136" alt="Androidゲームアプリ 窮屈な人生"></h1>
</header>
<h2>隠しステージ２ スコアランキング</h2>

<div id="wrap">
	<table>
		<tr id="tr_top"><td class="t_rank">順位</td><td class="t_score">スコア</td><td class="t_name">名前</td><td class="t_comment">ひとこと</td></tr>

<!-- ここからPHPでデータベースに接続、結果を表示 -->
<?php
$rank=1;
$result = mysql_query("select * from $table order by score desc, id asc LIMIT 1000");
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
	echo "<tr><td class=\"t_rank\">$rank</td><td class=\"t_score\">".$row["score"]."</td><td class=\"t_name\">".$row["name"]."</td><td class=\"t_comment\">".$row["comment"]."</td></tr>\n";
	$rank++;
} 
?>
<!-- ここまで -->

	</table>
<!--
  <br>
  <p><a style="color:#2D3032;" href="ranking1_100.php">100位まで表示</a></p>
-->

  <br>
  <p><a style="color:#2D3032;" href="rankingS2.php">戻る</a></p>
</div>
<footer>
<!-- AdMaker -->
<!--<div id="admaker1"></div>-->
  <!-- Begin: Adlantis, SpUnitZone: [窮屈な人生Web] -->
<div class='adlantis_sp_unit zid_MTMwNTM%3D%0A lsvol_1'></div>
<!-- End: Adlantis -->

<!--
<script type="text/javascript">
AdStir.ad("adstirtag1");
</script>
-->
  <br>
  <p><a href="./">トップヘ戻る</a></p>
  <br>
  <p><a href="../">PCサイト</a>　|　スマートフォンサイト</p>
</footer>
</body>
</html>
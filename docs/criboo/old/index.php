<!-- 日本とそれ以外振り分け -->
<?php

$strAcceptLanguage = $_ENV['HTTP_ACCEPT_LANGUAGE'];
$strUrlJapanese = "http://cooksonia.6.ql.bz/index.php";
$strUrlOther = "http://cooksonia.6.ql.bz/index_en.php";


if( ereg(".*ja.*",$strAcceptLanguage) ){

Header("Location: {$strUrlJapanese}");

}else{

Header("Location: {$strUrlOther}");

}

?>
<!-- 日本とそれ以外振り分け　終わり -->


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="description" content="Androidゲームアプリ「窮屈な人生」 - あなたの窮屈な人生をゲームにしました。理不尽に見えますが、発想を転換するとクリアできる知恵の輪のようなゲームです。">
<meta name="keywords" content="Android,Androidアプリ,Androidゲーム,Androidゲームアプリ,アプリ,窮屈な人生,知恵の輪,永良,永良慶太,ながらけいた,Keita Nagara">
<link rel="stylesheet" href="http://yui.yahooapis.com/3.0.0/build/cssreset/reset-min.css" media="screen" />
<link rel="stylesheet" href="http://yui.yahooapis.com/3.0.0/build/cssfonts/fonts-min.css" media="screen" />
<link rel="stylesheet" href="html5-reset-1.4.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" /> 
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<title>窮屈な人生 Androidゲームアプリ | クックソニア</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="js/easySlider1.7.js"></script>
<script type="text/javascript" src="js/jquery.jrumble.1.2.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
/* スマフォ振り分け */
if (document.referrer.indexOf('cooksonia.6.ql.bz') == -1 && ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0)) {
	location.href = 'http://cooksonia.6.ql.bz/sp/';
}

$(function(){
	/* Easy Slider */
	$("#slider").easySlider({
		auto: true, 
		continuous: true
	});

	/* J Rumble */
	$('.rumble-element').jrumble({
		x: 2,
		y: 2,
		rotation: 1
	});
	$('.rumble-element').trigger('startRumble');

	/* QRコード */
	$("#btnQR").click(function () {
		$("#QR").slideToggle("fast");
	});
	
	/* ヒント */
	$("#hint h3").click(function () {
		$("#hint_main").slideToggle("normal");
	});
	
	$(".stage").click(function () {
		$("div",this).slideToggle("fast");
	});
	
	/* 紹介サイト */
	$(".cite_article").hover(
  		function () {
   		 	$(this).css({"background":"#f6fff8","opacity":"0.8"});
  		},
  		function () {
			$(this).css({"background":"transparent","opacity":"1"});
  		}
	);
	
	/* Light Box */
	$('a.lightbox').lightBox(); 
});
</script>
<link rel="stylesheet" href="common.css" />
<link rel="stylesheet" href="index.css" />
<!--バブルボタンCSS-->
<link rel="stylesheet" type="text/css" href="buttons/buttons.css" />
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="nav">
	<div id="navCenter">
		<ul>
			<li><a id="nav_cooksonia" href="./">クックソニア</a></li>
			<li><a href="./">Home</a></li>
			<li><a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife">Market</a></li>
			<li><a target="_blank" href="https://twitter.com/k_nagara">Twitter</a></li>
		</ul>
	</div>
</div>

<div id="wrapper" class="clearfix">
<div id="header" class="clearfix">
		<div id="slider">
			<ul>				
				<li><img src="img/stage1.png" alt="窮屈な人生 Stage1" /></li>				
				<li><img src="img/stage2.png" alt="窮屈な人生 Stage2" /></li>				
				<li><img src="img/stage3.png" alt="窮屈な人生 Stage3" /></li>				
				<li><div id="sliderMarket" class="rumble-element" target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife">Android Market</div></li>
			</ul>
		</div>
</div>

<div id="main" class="clearfix">
	<div id="main_btn">
    	<a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife" id="btnMarket" class="button green"><span style="font-size:150%;">Android Market</span><br><span style="font-weight:700;">のページへ</span></a>
		<div id="btnQR" class="button gray"><span style="font-size:150%;">QR</span><span style="font-weight:500;font-size:130%;">コードを表示</span><br><span style="font-size:90%;font-weight:700;">（スマートフォン用）</span><div id="QR"><img src="img/QRcode4.gif" alt="QRコード" /><br><p>スマートフォンで上のQRコードを<br>読み取ってください。</p></div></div>
	</div>
	
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/Ajepw6" data-text="Androidゲームアプリ「窮屈な人生」" data-lang="ja" data-count="none" data-hashtags="androidjp">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div class="fb-like" data-href="http://cooksonia.6.ql.bz/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
	<div style="height:20px;"></div>
	
	<div id="cite" class="clearfix">
		<div id="cite_left">
			<a target="_blank" href="http://androider.jp/a/649dfa7e0cc053f3/">
				<div class="cite_article">
					<h4>アンドロイダーにて紹介されました。</h4>
					<img alt="アンドロイダーロゴ" src="img/androider.png" />
					<p>現実世界で溜まるストレス…そんな『窮屈な人生』は、このアプリでぶっ壊して革命を起こせ！逆転の発想がカギになる脳トレゲーム!?<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://appget.com/appli/view/60312">
				<div class="cite_article">
					<h4>アプリ★ゲットにて紹介されました。</h4>
					<img alt="アプリ★ゲットロゴ" src="img/appgetlogo.png" />
					<p>理不尽なのか、はたまた斬新なのか……。様々な思考の迷宮から抜けだしていく不思議な世界観のゲームが登場だ。哲学とクソゲーの間にあるような感慨深いゲーム。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://andronavi.com/2011/12/147448">
				<div class="cite_article">
					<h4>andronaviにて紹介されました。</h4>
					<img alt="ロゴ" src="img/andronavi.png" />
					<p>～単純に見えて奥深い！人生を問いただす10のミニゲーム～体育座りしたプレイヤーを迷路や部屋から脱出させるゲームを始め、シンプルな操作で10種類のステージが楽しめます。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://octoba.net/archives/20120108-android-app-5.html">
				<div class="cite_article">
					<h4>オクトバにて紹介されました。</h4>
					<img alt="ロゴ" src="img/octoba.png" />
					<p>発想の転換が大切！心の迷宮から知恵を絞って脱出しよう！「出口」に導けば一つの達成感が得られるゲームアプリである『窮屈な人生』、少し不思議な世界の本アプリをご紹介<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://www.tabroid.jp/app/games/2011/12/cooksonia.theboxedlife.html">
				<div class="cite_article">
					<h4>TABROIDにて紹介されました。</h4>
					<img alt="TABROIDロゴ" src="img/tabroid.png" />
					<p>どんよりハマれる暗ぁ縲怩｢脱出ゲーム。タイトル、テーマ、ビジュアル、そのあらゆる面においてここまで暗い影を落とすゲームも他になかなかないんじゃないでしょうか。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://android.giveapp.jp/StaffDetail/?selection_id=520&rpt=staff&staffMember=nagatomo">
				<div class="cite_article">
					<h4>giveApp de ANDROIDにて紹介されました。</h4>
					<img alt="giveApp de ANDROIDロゴ" src="img/giveapp.png" />
					<p>主人公であるらしき人物は余程人生に疲れたのか、体育座りをして寂しく座っています。モノクロ色が一層雰囲気を引き立てていますね…。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://android.dtmm.co.jp/app/11807">
				<div class="cite_article">
					<h4>スマート中目黒にて紹介されました。</h4>
					<img alt="スマート中目黒ロゴ" src="img/nakame.png" />
					<p>あなたの窮屈な人生がAndroidアプリになりました。退廃的な脱出ゲームといった感じで、頭を使うゲームでした。「窮屈な人生」<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://smapli.net/a/5/568.html">
				<div class="cite_article">
					<h4>スマプリにて紹介されました。</h4>
					<img alt="スマプリロゴ" src="img/smap.png" />
					<p>あなたは今どんな人生を歩んでいますか？幸せですか？不幸ですか？楽しいですか？”窮屈”ですか？窮屈だと思っている方は特に共感できそうなとってもくらーいゲーム、その名も「窮屈な人生」。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
<!--
			<hr>
			<a target="_blank" href="">
				<div class="cite_article">
					<h4>にて紹介されました。</h4>
					<img alt="ロゴ" src="img/.png" />
					<p><span class="readmore">→続きを読む</span></p>
				</div>
			</a>
-->
		</div>
		<div class="cite_right">
			<a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife">
				<div class="cite_article">
					<h4>70万ダウンロード突破しました！</h4>
					<img alt="Android Market DL" src="img/dl.png" />
				</div>
			</a>
			<hr>	
			<a class="lightbox" target="_blank" href="img/rank_market_new_big.png">
				<div class="cite_article">
					<h4>Android Market人気の新着無料アプリ第1位を獲得しました。</h4>
					<img alt="Android Marketランキング" src="img/rank_market_new.png" />
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://appget.com/ranking/weekly/free?vol=15">
				<div class="cite_article">
					<h4>週間人気ゲームアプリランキングにて第1位にランクインしました。</h4>
					<img alt="アプリ★ゲットランキング" src="img/rank_appget2.png" />
					<p>→アプリ★ゲット無料ゲーム週間人気ランキング(2011年12月2日～2011年12月8日)</p>
				</div>
			</a>
			<hr>	
			<a target="_blank" href="http://mclabo.net/?content=casual&date=20111206">
				<div class="cite_article">
					<h4>アプロイドランキングにて全体第2位、カテゴリ別第1位にランクインしました。</h4>
					<img alt="アプロイドランキング" src="img/rank_approid.png" />
					<p>→おすすめアンドロイドアプリをランキング｜アプロイド | カジュアル (2011年12月4日～12月7日)</p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://applab-jp.com/2011/12/12/%E3%82%B7%E3%83%81%E3%83%A5%E3%82%A8%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%81%8C%E9%9D%A2%E7%99%BD%E3%81%84%E3%83%9F%E3%83%8B%E3%82%B2%E3%83%BC%E3%83%A0%E9%9B%86%EF%BC%81-%E3%80%8C%E7%AA%AE%E5%B1%88/">
				<div class="cite_article">
					<h4>AppLabにて紹介されました。</h4>
					<img alt="ロゴ" src="img/applab.png" />
					<p>「あなたの窮屈な人生をゲームにしました。」という説明と、不思議なストーリーに沿った一風変わっているミニゲームがいくつも入ったアプリです。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://www.tapme.jp/?p=6332">
				<div class="cite_article">
					<h4>TAP meにて紹介されました。</h4>
					<img alt="TAP meロゴ" src="img/tapme.png" />
					<p>発想の柔軟さが求められる、頭の体操的なパズルゲームアプリ。シチュエーションとタイトルが示されているだけ。
何をすべきかも示されていない問題が出題され、それをクリアするゲームです。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
<!--
			<hr>	
			<a target="_blank" href="">
				<div class="cite_article">
					<h4></h4>
					<img alt="ランキング" src="img/.png" />
					<p>→</p>
				</div>
			</a>
-->
		</div>
		<div class="cite_right">
			<a target="_blank" href="http://appget.com/ranking/monthly/free?vol=5">
				<div class="cite_article">
					<h4>今月の人気ランキング急上昇ゲームに選ばれました。</h4>
					<img alt="アプリゲット月間ランキング" src="img/rank_appget_month.png" />
					<p>2ヶ月連続でトップ10入り！3位に入った進化する異端ゲーム「窮屈な人生」<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://appget.com/ranking/weekly/free?vol=14">
				<div class="cite_article">
					<h4>今週の人気ランキング急上昇ゲームに選ばれました。</h4>
					<img alt="アプリ★ゲットランキング" src="img/rank_appget_week.jpg" />
					<p>スパイスの利いたクセのある脱出（？）ゲーム「窮屈な人生」が惜しくも2位！<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
			<hr>	
			<a class="lightbox" target="_blank" href="img/rank_market_big.png">
				<div class="cite_article">
					<h4>Android Market人気の無料アプリにて第4位にランクインしました。</h4>
					<img alt="Android Marketランキング" src="img/rank_market.png" />
				</div>
			</a>
			<hr>	
			<a target="_blank" href="http://androider.jp/page/2011/12/1186/">
				<div class="cite_article">
					<h4>アンドロイダー週間ランキングにて、<br>第4位にランクインしました。</h4>
					<img alt="アンドロイダーランキング" src="img/rank_androider.png" />
					<p>→アンドロイドアプリ週間ランキング50(2011年11月28日～12月4日) アンドロイダー</p>
				</div>
			</a>
			<hr>
			<a target="_blank" href="http://android.pltk.jp/?p=9207">
				<div class="cite_article">
					<h4>アップマニアにて紹介されました。</h4>
					<img alt="アップマニアロゴ" src="img/appmania.png" />
					<p>なんとも暗い雰囲気のシュールな脱出アプリ ― 本日ご紹介するアプリは、非常に後ろ向きなタイトル「窮屈な人生」です。このタイトル・・・非常に暗いですね。<span class="readmore">→続きを読む</span></p>
				</div>
			</a>
<!--
			<hr>	
			<a target="_blank" href="">
				<div class="cite_article">
					<h4></h4>
					<img alt="ランキング" src="img/.png" />
					<p>→</p>
				</div>
			</a>
-->
		</div>
	</div>
	
<div id="hint">
	 	<h3>クリアのためのヒント</h3>
	<div id="hint_main">
	<div class="stage">
		<h4>ステージ１ 「迷宮に閉じこめられている」</h4>
		<div>
			タッチパネルを搭載したスマートフォンなら、方向キーなんて使わなくても「僕」を動かせます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ２ 「僕は部屋でひとりぼっち」</h4>
		<div>
			あるボタンを押すと、方向キーが出現します。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ３ 「都会のネオンに踊らされて」</h4>
		<div>
			ゴールが進行方向にあるとは限りません。<br>
			<br>
			ジャンプ中に方向キーを連打すると大きくジャンプできます。<br>
			さらに、加速をつけてからジャンプして方向キーを連打することでかなり遠くまでジャンプできます。<br>
			<br>
			また、着地した瞬間に逆方向のキーをタップすることで、一瞬で停止できます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ４ 「新しい街へ行きたい」</h4>
		<div>
			動かせるのは「僕」だけではありません。<br>
			<br>
			また、太平洋の方向には…
		</div>
	</div>
	<div class="stage">
		<h4>ステージ５ 「体力がなければ何もできない」</h4>
		<div>
			端末に向かって思いっきり叫んでみてください。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ６ 「東電なんてぶっ壊せ」</h4>
		<div>
			暗証番号を入力するダイアログを閉じると、ヒントを見ることができます。<br>
			ステージ４に戻って、地図をいろいろと動かしてみましょう。<br>
			<br>
			東電に入れたら、思いっきり地震を起こしてください。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ７ 「向こう側に辿り着けない」</h4>
		<div>
			指を２本使うと、瞬間移動できます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ８ 「警察とマスコミに追われている」</h4>
		<div>
			ヒントボタンを押すと、敵を一掃できます。<br>
			ただし、３回しか使えません。<br>
			<br>
			天使に助けられることでクリアになります。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ９ 「さよなら世界、僕はもう疲れた」</h4>
		<div>
			「僕」の自殺を阻止することはできません。<br>
			<br>
			棺桶に入っている「僕」を、旅立たせてあげてください。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ10 「敗れた魂は彷徨い続ける」</h4>
		<div>
			'出口'、つまり'EXIT'に導いてあげてください。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ11 「新しい世界へのゲートウェイ」</h4>
		<div>
			縦だけでなく、横もあり得ます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ12 「アタマノナカデバクハツ」</h4>
		<div>
			頭の中で思考が爆発して、予期せぬエラーとなって動作を停止してしまったのです。<br>
			<br>
			アプリのバグでエラーが発生したわけではありません。エラーはフェイクです。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ13 「あたまのなかをからっぽに」</h4>
		<div>
			考えれば考えるほど、わからなくなるのです。<br>
			何も考えないということができるとしたら、どれだけ楽でしょう。<br>
			<br>
			頭の中をからっぽにして、何もしないことがクリアの鍵です。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ14 「生け捕りされて水槽の中」</h4>
		<div>
			明るい場所から暗い場所へ移り、黒い金魚をすくいあげてください。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ15 「ほほえみの患者たち」</h4>
		<div>
			タップ、MENUボタン、シェイク、音によって顔が変化します。<br>
			<br>
			よく考えれば解ける論理パズルです。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ16 「繰り返しの日々から抜け出せ」</h4>
		<div>
			ステージを起動しようとしても、メイン画面を繰り返してしまいます。<br>
			<br>
			どこかに抜け出す道があるはずです。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ17 「結局、僕はまたひとりぼっち」</h4>
		<div>
			初心にかえって、もう一度初めからやり直そう。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ18 「あらゆる侮蔑を振り払え」</h4>
		<div>
			よく考えれば解ける論理パズル…と思いきや？<br>
			<br>
			もっとダイナミックに解くことができます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ19 「聖地巡礼その一」</h4>
		<div>
			すり抜けられる壁があります。<br>
			他と違う壁を探してみてください。<br>
			<br>
			ゴールへの道は2つあります。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ20 「情報依存そして思考停止」</h4>
		<div>
			色などは関係ありません。<br>
			<br>
			画面から視界に入ってくる情報を締めだすには、どうすればいいでしょうか。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ21 「失われゆく情熱 夕暮れを漫歩く」</h4>
		<div>
			スコアはステージクリアとは関係ありません。<br>
			<br>
			長押しするとより遠くまで跳べます。<br>
			2段ジャンプができます。<br>
			<br>
			ある操作をするとデバッグモードに入れます。
		</div>
	</div>
	<div class="stage">
		<h4>ステージ22 「スマホジャックウイルス」</h4>
		<div>
			ステージを起動するとスマホがウイルスに感染するので、ウイルスを除去してください。<br>
			<br>
			※ホームボタンを押せばいつでも正常な状態に戻ります。<br>
			<br>
			クリアへの足がかりとして、まずは設定画面を開いてください。（Menuボタンを押して「設定」を選ぶ）<br>
			「ユーザー補助」は重要なメニューの１つです。<br>
			また、「ウイルスチェック」で現在どのウイルスに感染しているか確認できます。<br>
			<br>
			アンインストールはしないでね☆（アンインストールしてもクリアにはなりません。）
		</div>
	</div>
	<div class="stage">
		<h4>隠しステージ1</h4>
		<div>
			ステージ３のもう１つのゴールに辿り着くことで遊べるようになります。
		</div>
	</div>
	<div class="stage">
		<h4>隠しステージ2</h4>
		<div>
			怪しい誇大広告には注意しましょう。<br>隠しステージ2へのパスワードが隠されているかも知れません。
		</div>
	</div>
	<span style="font-size:small;">共有して頂けると嬉しいです。</span><br>
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/Ajepw6" data-text="Androidゲームアプリ「窮屈な人生」" data-lang="ja" data-count="none" data-hashtags="androidjp">ツイート</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div class="fb-like" data-href="http://cooksonia.6.ql.bz/" data-send="false" data-layout="button_count" data-width="200" data-show-faces="false"></div>
	</div>
</div>
</div>

<a href="sp/ranking2.php" style="color: #550102;margin-bottom: 10px;font-weight: 700;">スコアランキング</a>

<footer>
  <br>
  <br>
  <p>PCサイト　|　<a href="sp/">スマートフォンサイト</a></p>
  <br><br>
  <p>当アプリは個人による制作です。お問い合わせは<a href="https://twitter.com/k_nagara">Twitter</a>かEmail(マーケットに記載)にてお願いします。</p>
</footer>
</div>

<!-- AppStoreHQ:claim_code:c04e42f0961621956829911dd70aa0649d0591d9 -->

</body>
</html>

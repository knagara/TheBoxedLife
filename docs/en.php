<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<meta name="description" content="The Boxed Life - Android Game Apo - Android Market Ranking No.1 in Japan. Surreal and mysterious game.">
<meta name="keywords" content="Android,Android App,Android Game,Android Game App,Apps,The Boxed Life,Keita Nagara">
<link rel="stylesheet" href="http://yui.yahooapis.com/3.0.0/build/cssreset/reset-min.css" media="screen" />
<link rel="stylesheet" href="http://yui.yahooapis.com/3.0.0/build/cssfonts/fonts-min.css" media="screen" />
<link rel="stylesheet" href="html5-reset-1.4.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" /> 
<!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
<![endif]-->
<title>The Boxed Life - Android Game App | Cooksonia</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js"></script>
<script type="text/javascript" src="js/easySlider1.7.js"></script>
<script type="text/javascript" src="js/jquery.jrumble.1.2.min.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
<script type="text/javascript">
/* スマフォ振り分け */
if (document.referrer.indexOf('cooksonia.6.ql.bz') == -1 && ((navigator.userAgent.indexOf('iPhone') > 0 && navigator.userAgent.indexOf('iPad') == -1) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0)) {
	location.href = 'http://cooksonia.6.ql.bz/sp/index_en.html';
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
<link rel="stylesheet" href="index_en.css" />
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
			<li><a href="./en.php">Home</a></li>
			<li><a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife">Apps</a></li>
			<li><a target="_blank" href="https://twitter.com/k_nagara">Twitter</a></li>
		</ul>
		<div id="pan"><p><a href="./">Japanese</a></p></div>
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
    	<a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife" id="btnMarket" class="button green"><span style="font-size:150%;">Android Market</span><br><span style="font-weight:700;">(Google Play)</span></a>
		<div id="btnQR" class="button gray"><span style="font-size:150%;">QR code</span><br><span style="font-size:90%;font-weight:700;">(for smartphone)</span><div id="QR"><img src="img/QRcode4.gif" alt="QRコード" /><br><p>URI for smartphone</p></div></div>
	</div>
	
	<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/Ajepw6" data-text="Android game app &quot;The Boxed Life&quot;" data-hashtags="android">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
	<div class="fb-like" data-href="http://cooksonia.6.ql.bz/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
	<div style="height:20px;"></div>
	
	<div id="cite" class="clearfix">
		<div id="cite_left">
			<a target="_blank" href="http://www.androidtapp.com/the-boxed-life/">
				<div class="cite_article">
					<h4>Featured on Android Tapp!</h4>
					<img alt="Android Tapp" src="img/androidtapp.png" />
					<p>The Boxed Life --- This mind-numbing tricky set of puzzles & riddles requires lateral thinking. A puzzler’s must-have game!<span class="readmore">→Read more</span></p>
				</div>
			</a>
		</div>
		<div class="cite_right">
			<a target="_blank" href="https://market.android.com/details?id=cooksonia.theboxedlife">
				<div class="cite_article">
					<h4>Thank you for 1,000,000+ downloads!</h4>
					<img alt="Android Market DL" src="img/dl.png" />
				</div>
			</a>
		</div>
		<div class="cite_right">
			<a class="lightbox" target="_blank" href="img/rank_market_new_big.png">
				<div class="cite_article">
					<h4>Market Ranking No.1 in Japan!</h4>
					<img alt="Android Marketランキング" src="img/rank_market_new.png" />
				</div>
			</a>
		</div>
	</div>
</div>
</div>

<footer>
  <p>PC　|　<a href="sp/en.php">Smartphone</a></p>
  <br>
  <br>
</footer>
</div>

<!-- AppStoreHQ:claim_code:c04e42f0961621956829911dd70aa0649d0591d9 -->

</body>
</html>

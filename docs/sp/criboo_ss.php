<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="iPhone/Androidゲームアプリ「無敵のキヨサキ」「窮屈な人生」 - 逆転の発想。型破りで破天荒。理不尽ゲーム。退廃的な世界観、哲学的なゲームデザイン。">
<meta name="keywords" content="iPhone,iPhoneアプリ,iPhoneゲーム,iPhoneゲームアプリ,Android,Androidアプリ,Androidゲーム,Androidゲームアプリ,アプリ,窮屈な人生,知恵の輪,永良,永良慶太,ながらけいた,Keita Nagara,攻略,窮屈,無敵のキヨサキ,キヨサキ">
<title>iPhone/Androidゲームアプリ 無敵のキヨサキ 窮屈な人生 | クックソニア</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/basenew.css">
<link rel="stylesheet" href="css/indexnew.css">
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
</script>
<meta name="format-detection" content="telephone=no">
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
<!--
<div id="pan">
	<p><a href="./en.php">English</a> | Japanese</p>
</div>
-->
<header id="top">
  <h1><img width="102" height="20" src="images/cooksonia.png" alt="iPhone/Androidゲームアプリ 窮屈な人生 無敵のキヨサキ | クックソニア"></h1>
</header>
<div id="wrap">
    <div class="app">
        <div class="appTitle">
        	<img width="50" height="50" src="images/icon.png" align="left" />
            <h2>窮屈な人生</h2>
        </div>
        <div class="appDescription">
            <p>逆転の発想。<br>
            型破りで破天荒。理不尽ゲーム。<br>
            退廃的な世界観、哲学的なゲームデザイン。<br>
            現在97万ダウンロードです。</p>
        </div>
        <div class="appDownload">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=cooksonia.theboxedlife">→Google Playへ</a>
        </div>
        <div class="appDownload appDetail">
            <a target="_blank" href="boxed.php">→詳細ページへ</a>
        </div>
        <div class="shareBtn" style="text-align:right;margin:12px 0;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/Ajepw6" data-text="Androidゲームアプリ「窮屈な人生」" data-via="Cooksonian" data-lang="ja" data-hashtags="androidjp">ツイート</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <div class="fb-like" data-href="http://cooksonia.6.ql.bz/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
            <a style="margin:0 10px 0 20px;" href="http://line.msng.info/http://bit.ly/Ajepw6"><img src="images/line.png" width="50" height="20" alt="LINEで送る" /></a>
        </div>
    </div>
    <div class="app">
        <div class="appTitle">
        	<img width="50" height="50" src="images/iconCriboo.png" align="left" />
            <h2>無敵のキヨサキ</h2>
        </div>
        <div class="appDescription">
            <p>3Dアクションゲーム。<br>
            完全無敵の主人公で雑魚キャラを蹴散らして、ストレス解消。<br>
            そして負け組の哀愁に思いを馳せる。<br>
			そういう乙なゲームです。<br>
            </p>
        </div>
        <div class="appDownload">
            <a target="_blank" href="https://itunes.apple.com/us/app/wu-dinokiyosaki/id573487916?l=ja&ls=1&mt=8">→App Storeへ</a>
        </div>
        <div class="appDownload">
            <a target="_blank" href="https://play.google.com/store/apps/details?id=com.Cooksonia.Criboo">→Google Playへ</a>
        </div>
        
        <?php
		
		  $ua=$_SERVER['HTTP_USER_AGENT'];
		  $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false));
		  if ($browser == true){
			$browser = 'iphone';
		  }
		  $browser2 = (strpos($ua,'Android')!==false);
		  if ($browser2 == true){
			$browser2 = 'android';
		  }
		  
		  /* 出力 */
		  if($browser == 'iphone'){
			echo '<div class="shareBtn" style="text-align:right;margin:12px 0;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/WhZoqk" data-text="無敵のキヨサキ on the App Store" data-via="Cooksonian" data-lang="ja" data-hashtags="appjp">ツイート</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <div class="fb-like" data-href="http://cooksonia.6.ql.bz/sp/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
            <a style="margin:0 10px 0 20px;" href="http://line.msng.info/http://bit.ly/WhZoqk"><img src="images/line.png" width="50" height="20" alt="LINEで送る" /></a>
        </div>';
         }else if($browser2 == 'android'){ 
        	echo '<div class="shareBtn" style="text-align:right;margin:12px 0;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://bit.ly/RaSNGm" data-text="無敵のキヨサキ - Google PlayのAndroidアプリ" data-via="Cooksonian" data-lang="ja" data-hashtags="androidjp">ツイート</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <div class="fb-like" data-href="http://cooksonia.6.ql.bz/sp/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
            <a style="margin:0 10px 0 20px;" href="http://line.msng.info/http://bit.ly/RaSNGm"><img src="images/line.png" width="50" height="20" alt="LINEで送る" /></a>
        </div>';
		 }else{ 
			echo '<div class="shareBtn" style="text-align:right;margin:12px 0;">
            <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://cooksonia.6.ql.bz/sp/" data-text="無敵のキヨサキ - iPhone/Androidアプリ" data-via="Cooksonian" data-lang="ja">ツイート</a><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            <div class="fb-like" data-href="http://cooksonia.6.ql.bz/sp/" data-send="false" data-layout="button_count" data-width="50" data-show-faces="false"></div>
            <a style="margin:0 10px 0 20px;" href="http://line.msng.info/http://cooksonia.6.ql.bz/sp/"><img src="images/line.png" width="50" height="20" alt="LINEで送る" /></a>
        </div>';
		 } 
		?>
        



    </div>
</div>
<footer>
  <div style="background:#550102;text-align:left;color:#fff;padding:10px;">
  <p>お問い合わせは<a style="color:#fff;" href="https://twitter.com/Cooksonian">Twitter</a>かEメール(Google Playに記載)にてお願いいたします。</p>
<a href="https://twitter.com/Cooksonian" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@Cooksonianさんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
  </div>
</footer>
</body>
</html>
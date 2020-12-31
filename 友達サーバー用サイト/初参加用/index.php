<head>
		<title>友達サーバー用サイト</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
		<link rel="stylesheet" href="style.css" />
		<noscript><link rel="stylesheet" href="/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<a href="/index.php" class="logo"><strong>RN</strong> <span>りんの物置場</span></a>
						<nav>
							<a href="#menu">メニュー</a>
						</nav>
					</header>
			</div>

			<nav id="menu">
				<ul class="links">
				　　<li><a href="/友達サーバー用サイト/初参加用">初参加用</a></li>
				　　<li><a href="/友達サーバー用サイト/ダウンロードリンク作成">ダウンロードリンク作成</a></li>
					<li><a href="/友達サーバー用サイト/掲示板">掲示板</a></li>
				</ul>
			</nav>


		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>


<div class="main">
<?php
if(isset($_POST['discord'])) {
    header('Location: http://discord.gg/h8QhP9GJmk');
    echo"test";
}
?>
		<h1>友達サーバー</h1>
	<p>友達サーバーは統合版もjava版も入れるから安心してね。<br>ルール<br>1.荒らさない<br>2.アドレスを人に教えない<br>3.サーバー内るをしない　<br>その他サーバー内や情報をネットにさらすことは禁止です

<form method="post" action="index.php">
<br><br><br><input type="submit" name="discord" value="Discordに参加">
	</from>
<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER-f'])) {
    header('Location: /友達サーバー用サイト/ログイン');
    exit;
}
	?>
</div>

</body>
</html>

<!DOCTYPE HTML>
<html>
	<head>
		<title>りんの物置場</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="/assets/css/main.css" />
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

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="/部活/youtube">Youtube DL</a></li>
							<li><a href="/部活/ダウンロードリンク作成">ダウンロードリンク作成</a></li>
							<li><a href="/部活/掲示板">掲示板</a></li>
						    <li><a href="/部活/アップロード">アップロード</a>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>りんの物置場</h1>
							</header>
							<div class="content">
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">見てみる</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="/images/pic01.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="youtube" class="link">Youtube DL</a></h3>
										<p>YouTubeの動画をダウンロードできます。</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="ダウンロードリンク作成" class="link">ダウンロードリンク作成</a></h3>
										<p>あなただけのダウンロードリンクを作成できます。</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic03.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="掲示板" class="link">掲示板</a></h3>
										<p>掲示板　言葉の通りです。</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/images/pic04.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="アップロード" class="link">アップロード</a></h3>
										<p>I love you</p>
									</header>
								</article>
						</section>

					</div>

				<!-- Contact -->


		<!-- Scripts -->
			<script src="/assets/js/jquery.min.js"></script>
			<script src="/assets/js/jquery.scrolly.min.js"></script>
			<script src="/assets/js/jquery.scrollex.min.js"></script>
			<script src="/assets/js/browser.min.js"></script>
			<script src="/assets/js/breakpoints.min.js"></script>
			<script src="/assets/js/util.js"></script>
			<script src="/assets/js/main.js"></script>

	</body>
</html>
<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER-club'])) {
    header('Location: /部活/ログイン/index.php');
    exit;
}
?>
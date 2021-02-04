<!DOCTYPE HTML>
<html>
	<head>
		<title>総合</title>
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
						<a href="index.php" class="logo"><strong>RN</strong> <span>りんの物置場</span></a>
						<nav>
							<a href="#menu">メニュー</a>
						</nav>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<ul class="links">
							<li><a href="部活">部活</a></li>
							<li><a href="友達サーバー用サイト">友達サーバー用サイト</a></li>
						</ul>
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>りん　総合</h1>
							</header>
							<div class="content">
								<ul class="actions">
									<li><form method="post" action="index.php"><input type="submit" name="logout" value="ログアウト"></form></li>
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
										<h3><a href="部活" class="link">部活専用サイト</a></h3>
										<p>部活</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="/mages/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="友達サーバー用サイト" class="link">友達サーバー専用サイト</a></h3>
										<p>友達サーバー用サイト</p>
									</header>
								</article>
																<article>
									<span class="image">
										<img src="/mages/pic02.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="きゅうり" class="link">きゅうり</a></h3>
										<p>きゅうり</p>
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

<?php //ログアウト機能
if(isset($_POST['logout'])){
    
    $_SESSION = [];
    session_destroy();
 
    header('Location: index.php');
    exit;
}?>

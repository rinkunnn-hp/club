
<html>
<head>
<meta http-equiv="content-type" charset="utf-8">
<title>りんの物置場</title>
<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="/header-fooder/style.css">
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
				     		<li><a href="/部活/youtube">Youtube DL</a></li>
							<li><a href="/部活/ダウンロードリンク作成">ダウンロードリンク作成</a></li>
							<li><a href="/部活/掲示板">掲示板</a></li>
						    <li><a href="/部活/アップロード">アップロード</a>
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
  <form action="index.php" method="post" enctype="multipart/form-data">
    ファイル：<br />
    <input type="file" name="upfile" size="30" /><br />
    <br />
    <input type="submit" value="アップロード" />

    <body>
      <p><?php
      if (is_uploaded_file($_FILES["upfile"]["tmp_name"])) {
        if (move_uploaded_file($_FILES["upfile"]["tmp_name"], "./" . $_FILES["upfile"]["name"])) {
            echo"できたよ";
        } else {
          echo "ファイルをアップロードできません。";
        }
      } else {
        echo "ファイルが選択されていません。";
      }
      
?>
</div>
</div>

<?php
 
session_start();
 
//ログイン済みかを確認
if (!isset($_SESSION['USER-club'])) {
    header('Location: /部活/ログイン/index.php');
    exit;
}
?>

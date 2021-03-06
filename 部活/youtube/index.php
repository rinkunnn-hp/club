<head>
		<title>りんの物置場</title>
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
<form action="index.php" method="POST">
	<h1>YouTubeダウンローダー1.0</h1>
	<p>YouTubeのURL：<input type="text" name="user_name"></p>
	<p>ファイル名の指定 日本語・空白非対応：<input type="text" name="password" value="youtube_movie"></p>
	<p>動画の拡張子の指定：<input type="text" name="video_k" value="mp4"></p>
	<p>音楽の拡張子の指定：<input type="text" name="music_k" value="mp3"></p>
	<input type="submit" name="movie_l" value="動画に変換">
	<input type="submit" name="movie_d" value="動画をダウンロード">
        <input type="submit" name="music" value="音楽に変換">
        <input type="submit" name="music_d" value="音楽をダウンロード">
</form>
<?php
		$name1 = $_POST["user_name"];
		$name2 = $_POST["password"];
		$name3 = $_POST["video_k"];
		$name4 = $_POST["music_k"];
        if(isset($_POST["movie_l"])) {
		chmod("/youtube/",0777);
		exec("rm $name2.$name3");
		exec("youtube-dl -f 22 --merge-output-format $name3 $name1 -o '$name2.$name3'");
		header( "location: https://rinkunnn.ddo.jp/部活/youtube/$name2.$name3");
	}
	if(isset($_POST["movie_d"])) {
                exec("rm $name2.$name3");
                exec("youtube-dl -f 22 --merge-output-format $name3 $name1 -o '$name2.$name3'");
                $file_path = "$name2.$name3";
                $file_name = "$name2.$name3";
                header('Content-Type: application/force-download');
                header('Content-Length: ' . filesize($file_path));
                header('Content-disposition: attachment; filename="' . $file_name . '"');
                ob_end_clean();
                readfile($file_path);
	}
		if(isset($_POST["music"])) {
		exec("rm $name2.$name4");
		exec("youtube-dl $name1 -x --audio-format $name4 -o '$name2.$name4'");
		header( "location: https://rinkunnn.ddo.jp/部活/youtube/$name2.$name4");
    }
        if(isset($_POST["music_d"])) {
                exec("rm $name2.$name4");
                exec("youtube-dl $name1 -x --audio-format $name4 -o '$name2.$name4'");
                $file_path1 = "$name2.$name4";
                $file_name1 = "$name2.$name4";
                header('Content-Type: application/force-download');
                header('Content-Length: ' . filesize("$file_path1"));
                header('Content-disposition: attachment; filename="' . $file_name1 . '"');
                ob_end_clean();
                readfile("$file_path1");
        }
?>
</div>

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

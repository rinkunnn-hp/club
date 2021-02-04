<head>
		<title>ぎょうざ用サイト</title>
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

    session_start();


    //ログイン機能
    $message = '';
    if(isset($_POST['login'])){
        if ($_POST['email'] == 'gyoza1458' && $_POST['password'] == 'winnergame'){ // ③

            $_SESSION["USER-f"] = '友達サーバー';
            header("Location: /きゅうり");
            exit;
        }
       else {
            // ⑤
            $message = 'うせろ　ゴミ人間';
 }
    }

?>
<h1>きゅうりのログイン</h1>
<p style="color: red"><?php echo $message ?></p>
<form method="post" action="index.php">
    <label for="email">アドレス</label>
    <input id="email" type="text" name="email">
    <br>
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <br>
    <input type="submit" name="login" value="ログイン">
</form>
</div>
</body>
</html>

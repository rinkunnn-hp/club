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
<?php

    session_start();


    //ログイン機能
    $message = '';
    if(isset($_POST['login'])){
        if ($_POST['email'] == 'kagakubu@gmail.com' && $_POST['password'] == 'okafu'){ // ③

            $_SESSION["USER-club"] = '科学部';
            header("Location: /部活/index.php");
            exit;
        }
       else {
            // ⑤
            $message = 'メールアドレスかパスワードが間違っています。乙。';
 }
    }

?>
<h1>部活のログイン</h1>
<p style="color: red"><?php echo $message ?></p>
<form method="post" action="index.php">
    <label for="email">メールアドレス</label>
    <input id="email" type="email" name="email">
    <br>
    <label for="password">パスワード</label>
    <input id="password" type="password" name="password">
    <br>
    <input type="submit" name="login" value="ログイン">
</form>
</div>
</body>
</html>

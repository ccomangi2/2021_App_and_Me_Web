<?php
include './db_conn.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>App & Me</title>
</head>
<link rel="stylesheet" href="css/main.css">
<body>
	<header>
	<img src="img/appandme_web_logo.png" alt="app&me">
		<span style="margin-left: 40%; color: #FF6384;" onclick="location.href='about.html'">ABOUT</span>
		<span style="margin-left: 1%;" onclick="location.href='members.html'">부원소개</span>
		<span style="margin-left: 1%;" onclick="location.href='submit.php'">지원하기</span>
		<span style="margin-left: 1%;" onclick="location.href='qna.php'">Q&A</span>
	</header>
	<div class="main">
		<img src="img/appandme_web_background.png">
	</div>
	<center>
	<div class="title">
		<p style="font-weight: bold;">USER에서 MAKER로 거듭나고자 하는</p>
		<p style="font-weight: bold;">당신을 위한 최고의 선택, APP&ME</p>
		<p style="font-size: 2em; margin-top: 20px;">ㅡ</p>
		<p style="font-size: 1.2em; margin-top: 20px;">앱앤미와 관련되어 궁금한 점이 있다면</p>
		<p style="font-size: 1.2em; margin-top: 3px;">질문하고 궁금증을 풀어보세요.</p>
		<p style="font-size: 1.3em; margin-top: 15px;">03.21-04.02</p>
	</div>
	</center>
</body>
</html>
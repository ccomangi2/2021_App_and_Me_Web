<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>App & Me</title>
  <link rel="shortcut icon" href="img/favicon.ico">
  <link rel="stylesheet" href="css/qna.css">
</head>

<body style="overflow-y:hidden">
  <header>
    <img src="img/appandme_web_logo.png" alt="app&me" onclick="location.href='main.html'">
    <span style="margin-left: 40%;" onclick="location.href='about.html'">ABOUT</span>
    <span style="margin-left: 1%;" onclick="location.href='members_8th.html'">부원소개</span>
    <span style="margin-left: 1%;" onclick="location.href='submit.php'">지원하기</span>
    <span style="margin-left: 1%; color: #FF6384;" onclick="location.href='qna.php'">Q&A</span>
  </header>
</body>
<div class="margin">
  <center>
    <div class="box">
      <div class="title">Q&A</div>
      <center>
        <hr width="5%" size="1%" color="#230A3F">
      </center>
      <br>
      <div class="content">앱앤미와 관련되어 궁금한 점이 있다면<br>질문하고 궁금증을 풀어보세요.<br><br></div>
    </div>
  </center>
</div>
<div class="group">
  <img src="img/appandme_web_icon01.png">
  <span style="color: #FF6384;" onclick="location.href='qna_write.php'">작성하기</span>
</div>
<!-- 내용 가져오기 -->
<center>
  <table border="1" width="55%" style="border-collapse:collapse">
    <thread>
      <tr align="center" bgcolor="#F0F0F9">
        <th class="no">NO</th>
        <th class="head">제목</th>
        <th class="name">이름</th>
        <th class="date">날짜</th>
      </tr>
    </thread>
    <tbody>
      <tr align="center" bgcolor="#ffffff">
        <td>01</td>
        <td>가입 문의합니다.</td>
        <td>앱앤미</td>
        <td>2021-03-21 13:00</td>
      </tr>
    </tbody>
  </table>
</center>

</html>
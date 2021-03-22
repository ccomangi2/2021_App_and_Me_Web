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
  <center>
    <table border="0" width="50%" style="border-collapse:collapse">
      <thread>
        <tr id="line" align="center" bgcolor="#ff7b98">
          <th style="color:#ffffff;">NO</th>
          <th id="head">제목</th>
        </tr>
      </thread>
      <tbody bgcolor="#ffffff">
        <tr id="line" align="center">
          <td id="no" class="no1_Q">01</td>
          <td class="no1_Q">앱앤미는 어떤 활동을 하나요?</td>
        </tr>
        <tr id="line" align="left">
          <td class="no1_A" colspan="2" style="display:none;">
          <span>&nbsp;A.&nbsp;&nbsp;</span>다양한 외부 공모전과 앱/아이디어 경진 대회에 참가할 수 있고, 특강/세미나 등 여러 가지 행사에도 참여할 수 있습니다. 그 외에도 동아리 내에서 전공 관련 스터디를 진행합니다.</td>
        </tr>

        <tr id="line" align="center">
          <td id="no" class="no2_Q">02</td>
          <td class="no2_Q">모집 기간은 언제 인가요?</td>
        </tr>
        <tr id="line" align="left">
          <td class="no2_A" colspan="2" style="display:none;">
          <span>&nbsp;A.&nbsp;&nbsp;</span>2021년 03월 23일 부터 2021년 04월 02일까지 입니다.</td>
        </tr>

        <tr id="line" align="center">
          <td id="no" class="no3_Q">03</td>
          <td class="no3_Q">면접은 언제 보나요?</td>
        </tr>
        <tr id="line" align="left">
          <td class="no3_A" colspan="2" style="display:none;">
          <span>&nbsp;A.&nbsp;&nbsp;</span>2021년 03월 27일 토요일에 zoom으로 면접 진행합니다.</td>
        </tr>

        <tr id="line" align="center">
          <td id="no" class="no4_Q">04</td>
          <td class="no4_Q">몇 명 뽑나요?</td>
        </tr>
        <tr id="line" align="left">
          <td class="no4_A" colspan="2" style="display:none;">
          <span>&nbsp;A.&nbsp;&nbsp;</span>디자인과는 2명, 개발과는 과 상관없이 4명으로 총 6명 뽑습니다.</td>
        </tr>
      </tbody>
    </table>
  </center>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script language="javascript">
  $(document).ready(function() {
    $(".no1_Q").click(function(){
      $(".no1_A").toggle();
    });
    $(".no2_Q").click(function(){
      $(".no2_A").toggle();
    });
    $(".no3_Q").click(function(){
      $(".no3_A").toggle();
    });
    $(".no4_Q").click(function(){
      $(".no4_A").toggle();
    });
  });
  </script>
</body>
</html>
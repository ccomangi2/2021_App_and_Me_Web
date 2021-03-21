<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>App & Me</title>
	<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="css/qna_write.css">
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
    <div class="title">Q&A 등록</div>
  </div>
  <center>
    <hr width="60%" color="#FF6384">
  </center>
  <div class="margin">
    <div class="box">
      <form class="login-form" action="qnaaction.php" method="post">
        <table class="table table-boardered">
          <tr class="content">
            <td>학번 이름</td>
            <td><input type="text" class="form-control" name="name" style="width:200px;display:inline;">
            <td>
          </tr>

          <tr class="content">
            <td>제목</td>
            <td><input type="text" class="form-control" name="title" style="width:200px;display:inline;"></td>
          </tr>
          <tr class="content">
            <td>내용</td>
            <td><input type="text" class="form-control" name="content" style="width:200px;display:inline;"></td>
          </tr>

          <tr>
            <td>
              <!-- 수정필요 -->
              <div class="apply">
                <input type="submit">
                <!-- <input type="submit" class="btn btn-primary btn-lg"> -->
                <span onclick="location.href='qnaaction.php'">등록하기</span>
              </div>
            </td>
          </tr>

        </table>
      </form>
    </div>
  </div>
</body>

</html>
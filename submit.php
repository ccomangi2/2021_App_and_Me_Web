<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <title>App & Me</title>
	<link rel="shortcut icon" href="img/favicon.ico">
<link rel="stylesheet" href="css/submit.css">
</head>

<body>
  <header>
    <img src="img/appandme_web_logo.png" alt="app&me" onclick="location.href='main.html'">
    <span onclick="location.href='about.html'">ABOUT</span>
    <span style="margin-left: 1%;" onclick="location.href='members_8th.html'">부원소개</span>
    <span style="margin-left: 1%; color: #FF6384;" onclick="location.href='submit.php'">지원하기</span>
    <span style="margin-left: 1%;" onclick="location.href='qna.php'">Q&A</span>
  </header>
  <div class="margin">
    <div class="title">지원하기</div>
    <hr id="title_hr">
  </div>
  <div class="margin">
    <center>
      <div class="box">
        <form class="login-form" action="submitaction.php" method="post">
          <table width="95%" class="list-table">
            <tr class="content">
              <td>학번</td>
              <td><input id="hakbun" type="text" name="student_id" size="50" placeholder="3100" required>
              </td>
            </tr>
            <tr class="content">
              <td>이름</td>
              <td><input id="name" type="text" name="name" size="50" placeholder="김미림" required>
              </td>
            </tr>
            <tr class="content">
              <td>전화번호</td>
              <td><input id="phone" type="text" name="phone" size="50" placeholder="01012345678" required>
              </td>
            </tr>
            <tr class="content">
              <td>나를 5글자로 표현한다면?</td>
              <td><input id="fiveme" type="text" name="five" size="50">
              </td>
            </tr>
            <tr> 
              <td colspan="10">
                <hr>
              </td>
            </tr>
            <tr class="content">
              <td>지원동기</td>
              <td colspan="2">
                <textarea  id="test" name="content" onkeyup="len_chk()"
                  rows="6" placeholder="내용을 입력해주세요. (200자 이내)" required></textarea>
                  <div id="test_cnt">(0 / 200)</div>
              </td>
            </tr>
          </table>
          <input type="submit" class="apply" value="지원하기" onclick="location.href='submitaction.php'">
        </form>
      </div>
      
    </center>
    <script language="javascript">
      //글자수 제한 체크 
      function len_chk() {
        var frm = document.apply.reason;
        var frm2 = document.apply.todo;
        if (frm.value.length > 400) {
            alert("글자수는 200자로 제한됩니다.");
            frm.value = frm.value.substring(0, 400);
            frm.focus();
        } else if (frm2.value.length > 400) {
            alert("글자수는 200자로 제한됩니다.");
            frm2.value = frm2.value.substring(0, 400);
            frm2.focus();
        }
      }
      //글자수 카운트
      $(document).ready(function() {
        $('#test').on('keyup', function() {
            $('#test_cnt').html("("+$(this).val().length+" / 200)");
 
            if($(this).val().length > 200) {
                $(this).val($(this).val().substring(0, 200));
                $('#test_cnt').html("(200 / 200)");
            }
        });
    });
    </script>
</body>

</html>
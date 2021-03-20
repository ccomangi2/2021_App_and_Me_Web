<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
  
          <h4>qna 등록</h4>

          <form class="login-form" action="qnaaction.php" method="post">
            <table class="table table-boardered">
              <tr>
                <td>이름</td>
                <td><input type="text" class="form-control" name="name" style="width:200px;display:inline;"><td>
              </tr>

              <tr>
                <td>제목</td>
                <td><input type="text" class="form-control" name="title" style="width:200px;display:inline;"></td>      
              </tr>    

              <tr>
                <td>내용</td>
                <td><input type="text" class="form-control" name="content" style="width:200px;display:inline;"></td>       
              </tr>
              
             <tr>
               <td>
                <input type="submit" class="btn btn-primary btn-lg">
              </td>
              </tr>

            </table>
          </form>


      
   


  </body>
</html>

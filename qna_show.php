<?php

   include './db_conn.php';
   $sql = "SELECT title, name, context FROM qna";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo $row["title"]."&nbsp 작성자 : ".$row["name"]. "<br> Q.:" . $row["context"]. "<br><br>";
    }
   }else{
    echo "아직 질문이 없습니다.";
   }
   mysqli_close($conn);
?>
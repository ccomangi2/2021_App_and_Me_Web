<meta charset="UTF-8">
<?php

   include './db_conn.php';
   $sql = "SELECT name, student_id, five, motive FROM submit";
   $result = mysqli_query($conn, $sql);
   if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "학번 이름 : ".$row["student_id"]."&nbsp".$row["name"]. "<br> 다섯글자 표현:" . $row["five"]. "<br>지원동기: ". $row["motive"]. "<br><br>";
    }
   }else{
    echo "아직 지원자가 없습니다.";
   }
   mysqli_close($conn);
?>
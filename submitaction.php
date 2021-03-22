<meta charset="UTF-8">
<?php
include './db_conn.php';

$name = $_POST['name'];
$student_id = $_POST['student_id'];
$five = $_POST['five'];
$motive = $_POST['content'];
$phone = $_POST['phone'];


$sql="insert into submit(name,student_id,five,motive,phone)values('$name','$student_id','$five','$motive','$phone')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php'; alert('지원서 제출이 완료되었습니다 :)');</script>"); 

?>


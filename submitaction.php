<?php

include './db_conn.php';

$name = $_POST['name'];
$student_id = $_POST['student_id'];
$five = $_POST['five'];
$motive = $_POST['motive'];

$sql="insert into submit(name,student_id,five,motive)values('$name','$student_id','$five','$motive')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php';</script>"); 
?>


<?php

include './db_conn.php';

$name = $_POST['name'];
$title = $_POST['title'];
$content = $_POST['content'];

$sql="insert into qna(title,name,content)values('$title','$name','$content')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='index.php';</script>"); 
?>


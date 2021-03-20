<?php

include './db_conn.php';

$username = $_POST['name '];
$title = $_POST['title'];
$content = $_POST['content'];

$sql="insert into qna(username,title,content)values('$username','$title','$content')";
mysqli_query($conn,$sql);
mysqli_close($conn);

echo("<script>location.href='size.php';</script>"); 
?>


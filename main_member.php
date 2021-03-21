<?php
    session_start();
    $password=$_POST['password'];
    $_SESSION= "appandme18"

    if(isset($_SESSION)) {
        header('Location:surpport_list.html');
    } else {
        echo "인증에 실패했습니다.";
    }
?>
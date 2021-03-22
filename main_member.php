<?php
    session_start();
    $password=$_POST['password'];
 

    if($password=="appandme") {
        header('Location:surpport_list.php');
    } else {
        echo "인증에 실패했습니다.";
    }
?>
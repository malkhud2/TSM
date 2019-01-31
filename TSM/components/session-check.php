<?php
    session_start();
    require '_database/database.php';
    if(!$_SESSION['userEmail']){
        header("location:login.php?session=notset");
    }
?>
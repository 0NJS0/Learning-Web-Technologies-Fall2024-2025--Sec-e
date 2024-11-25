<?php
    session_start();
    if(isset($_POST['login']))
    {
        $_SESSION['status1']=TRUE;
        header('location: Login.php');
    }

    elseif(isset($_POST['register']))
    {
        $_SESSION['status2']=TRUE;
        header('location: registration.php');
    }
?>
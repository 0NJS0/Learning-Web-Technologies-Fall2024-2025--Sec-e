<?php 
    session_start();
    if(isset($_REQUEST['login1'])){
        $username = trim($_REQUEST['Username']);
        $password = trim($_REQUEST['pass']);

            if($username == null || empty($password)){
                echo "Null username/password";
            }
            elseif($username == $_SESSION['username'] && $password == $_SESSION['pass']){
                
                header('location: home.php');
                $_SESSION['status3']=TRUE;
            }
            else{
                echo'fill up the form first';
            }
    
    }else{
        echo'Please access this page through welcome page';
        header('location: Welcome.php');
    }

?>
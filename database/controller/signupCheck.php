<?php 
    session_start();
    require_once('../model/userModel.php');
    if(isset($_REQUEST['submit'])){
        echo "submit done";
        $username = trim($_REQUEST['username']);
        $password = trim($_REQUEST['password']);
        $email = trim($_REQUEST['email']);
        $type = $_REQUEST['type'];

        if($username == null || empty($password) || empty($email) ||empty($type)){
            echo "Null username/password/email";
        }else{
            
            $status = addUser($username, $password, $email,$type);
            if($status){
                header('location: ../view/login.html');
            } else{
                header('location: ../view/signup.html');
            }
        }

    }else{
        header('location: ../view/signup.html');
    }

?>
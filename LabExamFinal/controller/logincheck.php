<?php 
    session_start();
    require_once('../model/userModel.php');

    if(isset($_REQUEST['submit'])){
        $username = strtolower(trim($_REQUEST['username']));
        $password = trim($_REQUEST['password']);

        if($username == null || empty($password)){
            echo "Null username/password";
        }else{
            
            $status = login($username, $password);
            if($status){
                $usertype= getUserType($username);
                setcookie('status', 'true', time()+3600, '/');
                $_SESSION['username'] = $username;
                $_SESSION['user_type']= $usertype;
                if($usertype == 'author'){
                header('location: ../view/author_menu.php');
            }elseif($usertype == 'admin'){
                header('location: ../view/Admin_menu.php');
            }
            }
            else{
                echo "User Not Registered";
                //header("location: ../view/login.html ");
            }
        }
    }
    else{

        header('location: ../view/login.html');
    }

?>
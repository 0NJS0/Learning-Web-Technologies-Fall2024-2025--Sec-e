<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];

        if($username == null){
            echo "Null Entry";
        }
        elseif(strlen($username)<2){
            echo "Entry is less than 2";
        }
        elseif(i){
            echo "Entry is less than 2";
        }
    else{
        header('location: page2.html');
    }
    else{
        //echo "invalid request!";
        header('location: page 1.html');
    }


?>
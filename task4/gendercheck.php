<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['gender'];

        if($username == null){
            echo "Null Entry";
        }
        elseif(strlen($username)<2){
            echo "Entry is less than 2";
        }
    else{
        header('location: page4.html');
    }
    else{
        //echo "invalid request!";
        header('location: page3.html');
    }


?>
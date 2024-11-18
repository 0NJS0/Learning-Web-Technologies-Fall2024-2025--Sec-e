<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['gender'];

        if($username == null){
            echo "Null Entry";
        }
    else{
        header('location: page4.html');
    }
}
    else{
        //echo "invalid request!";
        header('location: page3.html');
    }


?>
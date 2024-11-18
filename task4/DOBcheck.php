<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['date'];

        if($username == null){
            echo "Please select a gender";
        }
    else{
        header('location: page4.html');
    }
}
    else{
        //echo "invalid request!";
        header('location: page4.html');
    }


?>
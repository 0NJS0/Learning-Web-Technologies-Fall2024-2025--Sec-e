<?php 

    if(isset($_POST['submit'])){

        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
            header('location: page5.html');
        }
    else{
        echo "Please select a gender.";
    }
}
    else{
        //echo "invalid request!";
        header('location: page3.html');
    }


?>
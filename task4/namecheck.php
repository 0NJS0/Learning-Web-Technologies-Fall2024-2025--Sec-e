<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstchar=$username[0];

        if($username == null){
            echo "Null Entry";
        }
        elseif(strlen($username)<2){
            echo "Entry is less than 2";
        }
        elseif((ctype_alpha($firstchar))){
            echo "error  ";
        }
        for($i=0; $i <strlen($username);$i++)
            $char=$username[$i];
            if(!(ctype_alpha($char))||$char=='.'||$char==' ')
            {
                echo "Input can only contain alphabet";
            }
        }
    else{
        header('location: page2.html');
    }
    else{
        //echo "invalid request!";
        header('location: page 1.html');
    }


?>
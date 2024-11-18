<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstchar=$username[0];

        $flag = 0;
        for($i=0; $i <strlen($username);$i++)
        {
            $char=$username[$i];
            if(!(ctype_alpha($char))||$char=='.'||$char==' ')
            {
                $flag= 1;
            }
        }
        if($username == null){
            echo "Null Entry";
        }
        elseif(strlen($username)<2){
            echo "Entry is less than 2";
        }
        elseif(!(ctype_alpha($firstchar))){
            echo "First Char needs to be a letter";
        }
    
        elseif($flag==1)
        {
            echo "Input needs to be a letter";
        }
    else{
        header('location: page2.html');
    }
}
    else{
        //echo "invalid request!";
        header('location: page 1.html');
    }


?>
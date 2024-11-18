<?php 

    if(isset($_POST['submit'])){
        $username = $_POST['email'];
        $atfound= false;
        $dotfound= false;
        $flag = 0;
        for($i=0; $i <strlen($username);$i++)
        {
            $char=$username[$i];
            if($char=='@')
            {
                if($atfound)
                {
                    $flag=1;
                }
                $atfound=true;
            }
            elseif($char=='.')
            {
                if($dotfound)
                {
                    $flag=1;
                }
                $dotfound=true;
            }
        }
        if($username == null){
            echo "Null Entry";
        }

        elseif($flag==1){
            echo "Invalid Email";
        }
    else{
        header('location: page3.html');
    }
}

    else{
        //echo "invalid request!";
        header('location: page 2.html');
    }


?>
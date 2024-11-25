<?php 
    session_start();
    if(isset($_REQUEST['Submit'])){

        $username = trim($_REQUEST['name']);
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
 
            $_SESSION['status1']=TRUE;
            $_SESSION['username']=$username;







        if (isset($_POST['degree'])&& count($_POST['degree'])>=2) {
            $degree = $_POST['degree'];
            $_SESSION['degree']=$degree;
        }








        if (isset($_POST['blood_group'])) {
            $blood = $_POST['blood_group'];
            $_SESSION['blood']=$blood;
        }





        if(isset($_POST['email'])){
        $email = $_POST['email'];
        $atfound= false;
        $dotfound= false;
        $flag = 0;
        for($i=0; $i <strlen($email);$i++)
            {
                $char=$email[$i];
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
        }
        elseif($flag==1){
            echo "Invalid Email";
        }
    

        $_SESSION['email'] = $_POST['email'];




        $dob = $_POST['dob'];
        $_SESSION['dob']=$dob;






            $gender = $_POST['gender'];
            $_SESSION['gender']=$gender;



            $password= $_POST['pass'];
            $_SESSION['pass']=$password;


        if(isset($_POST['confirm_pass']))
        {
            $confirm_pass=$_POST['confirm_pass'];
            $_SESSION['confirm_pass']=$confirm_pass;
        }

        if($_POST['name'] ==null || $_POST['email']==null || $_POST['dob']==null || $_POST['gender']==null || $_POST['blood_group']==null || $_POST['pass'] !=$_POST['confirm_pass'] || $_POST['degree']==null || $_POST['name']==null)
        {
            echo "Please fill up the form properly";
        }

        else{
            header('location: Welcome.php');
        }
    }
    

?>
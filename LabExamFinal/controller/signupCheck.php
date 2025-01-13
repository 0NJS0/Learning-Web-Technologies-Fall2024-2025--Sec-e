<?php 
session_start();
require('../model/userModel.php');

if (isset($_REQUEST['submit'])) {
    if (isset($_REQUEST['username']) && isset($_REQUEST['fullname']) && isset($_REQUEST['password']) && isset($_REQUEST['confirmpassword']) && isset($_REQUEST['phone']) )
    {
        $username = strtolower(trim($_REQUEST['username']));
        $full_name = trim($_REQUEST['fullname']);
        $password = trim($_REQUEST['password']);
        $confirm_pass = trim($_REQUEST['confirmpassword']);
        $phoneno = $_REQUEST['phone'];
        $type = "author";
        

        $usernameconfirm = $emailconfirm = $phone_confirm = $pass_confirm = null;
        $errors = [];


        if (empty($username)) {
            $errors[] = "Username cannot be empty.";
        } elseif (strlen($username) < 2) {
            $errors[] = "Username must be at least 2 characters long.";
        } elseif (!ctype_alpha($username[0])) {
            $errors[] = "The first character of the username must be a letter.";
        } else {
            $flag = 0;
            for ($i = 0; $i < strlen($username); $i++) {
                $char = $username[$i];
                if (!(ctype_alpha($char)) || $char == '.' || $char == ' ') {
                    $flag = 1;
                }
            }
            if ($flag) {
                $errors[] = "Username can only contain letters.";
            } else {
                $usernameconfirm = $username;
            }
        }

        if(empty($full_name)){
            $errors[] = "Fullname cannot be empty";
        }
        elseif (strlen($full_name) < 3 || strlen($full_name) > 100) {
            $errors[] = "Full name must be between 3 and 100 characters long.";
        }

        else {
            $full_name_confirm = $full_name;
        }


        if (empty($password) || empty($confirm_pass)) {
            $errors[] = "Password and confirm password fields cannot be empty.";
        } else {
            $flag = 0;

            if (strlen($password) < 8) {
                $flag = 1;
                $errors[] = "Password must be at least 8 characters long.";
            }

            $uppercase_found = $lowercase_found = $number_found = false;

            for ($i = 0; $i < strlen($password); $i++) {
                $char = $password[$i];
                if (ctype_upper($char)) {
                    $uppercase_found = true;
                } elseif (ctype_lower($char)) {
                    $lowercase_found = true;
                } elseif (ctype_digit($char)) {
                    $number_found = true;
                }
            }

            if (!$uppercase_found) {
                $flag = 1;
                $errors[] = "Password must contain at least one uppercase letter.";
            }
            if (!$lowercase_found) {
                $flag = 1;
                $errors[] = "Password must contain at least one lowercase letter.";
            }
            if (!$number_found) {
                $flag = 1;
                $errors[] = "Password must contain at least one number.";
            }

            if ($password !== $confirm_pass) {
                $flag = 1;
                $errors[] = "Passwords do not match.";
            }

            if ($flag === 0) {
                $pass_confirm = $password;
            }
        }


        if (empty($phoneno)) {
            $errors[] = "Phone number cannot be empty.";
        } else {
            $flag = 0;

            if (strlen($phoneno) != 11) {
                $flag = 1;
                $errors[] = "Phone number must be exactly 11 digits long.";
            }

            $valid_prefixes = ['013', '014', '015', '016', '017', '018', '019'];
            $prefix = substr($phoneno, 0, 3);

            if (!in_array($prefix, $valid_prefixes)) {
                $flag = 1;
                $errors[] = "Phone number must start with a valid Bangladeshi prefix (e.g., 013, 017).";
            }

            if (!ctype_digit($phoneno)) {
                $flag = 1;
                $errors[] = "Phone number must contain only numeric digits.";
            }

            if ($flag === 0) {
                $phone_confirm = $phoneno;
            }
        }

    


        if (empty($errors)) 
        {
            if (checkUserExists($username)) {
                $errors[] = "Username or email already exists. Please choose a different one.";
            } else {
                    $approval=0;
                    $status = addUser($usernameconfirm,
                                        $full_name_confirm,
                                        $pass_confirm,
                                        $phone_confirm,
                                        $type);
                    if ($status) {
                        header('location: ../view/login.html');
    
                    } else {
                        $errors[] = "Failed to create account. Please try again.";
                    }
                } 
               
            }


        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }
    else{
        header('location: ../view/signup.html');
    }
} else {
    header('location: ../view/signup.html');
    exit();
}
?>

<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'labexam');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $full_name, $password, $phone,$type): bool {
        $con = getConnection();
        
        $sql = "INSERT INTO user VALUES ('', '{$username}', '{$password}', '{$full_name}', '{$phone}','{$type}')";
        
        if (mysqli_query($con, $sql)) {
            return true;
            }
        else {
            return false;
        }
    }




    function updateUser($username, $full_name, $phone, $current_username): bool {
        $con = getConnection();
    
        $sql = "UPDATE user SET username = '{$username}', fullname = '{$full_name}',phone = '{$phone}' WHERE username = '{$current_username}'";
    
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }



    

    function checkUserExists($username)
    {
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE username = '{$username}'";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

        if($count >=1){
            return true;
        }else{
            return false;
        }
    }

    function checkIfUsernameExists($username, $current_username) {
        $con = getConnection(); 
    
  
        $sql = "SELECT * FROM user WHERE username = '{$username}' AND username = '{$current_username}'";
        
        $result = mysqli_query($con, $sql);
        
        if (mysqli_num_rows($result) > 0) {
            return true; 
        }
        return false;
    }



    function checkIfValuesExist($username,$full_name, $phone, $current_username) {
        $con = getConnection();
        
        $sql = "SELECT * FROM user WHERE (username = '{$username}' AND username != '{$current_username}')
                OR (fullname = '{$full_name}' AND username != '{$current_username}')
                OR (phone = '{$phone}' AND username != '{$current_username}')";
        
        $result = mysqli_query($con, $sql);
        
        
        if (mysqli_num_rows($result) > 0) {
            return true;
        }
        
        return false;
    }

    function getUser($name){
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE username = '{$name}'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
    }



    function getUserFilter($username_filter) {
        $con = getConnection();
        $sql = "SELECT * FROM user WHERE user_type = 'author'";


        if ($username_filter) {
            $sql .= " AND username LIKE '%$username_filter%'";
        }

        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }

    function getAllUser() {
        $con = getConnection();
        $sql = "SELECT * FROM user '";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }


    

    function getUserType($username) {
        $con = getConnection();
        $sql = "SELECT user_type FROM user WHERE username = '{$username}'";
        $result = mysqli_query($con, $sql);
    
        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            return $row['user_type']; 
        } else {
            return null; 
        }
    }




    function getTotalUsers() {
        $con = getConnection();
    $sql = "SELECT * FROM user ";
    $result = mysqli_query($con, $sql);
    $count = mysqli_num_rows($result);

    return $count;

    }





    function deleteUser($current_username) {
        $con = getConnection();
        
        $sql = "DELETE FROM user WHERE username = '{$current_username}'";
        
        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>


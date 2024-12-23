<?php

    function getConnection(){
        $con = mysqli_connect('127.0.0.1', 'root', '', 'Labtask');
        return $con;
    }

    function login($username, $password){
        $con = getConnection();
        $sql = "select * from user where name='{$username}' and pass='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count ==1){
            return true;
        }else{
            return false;
        }
    }

    function addUser($username, $password, $email,$type){
        $con = getConnection();
        $sql = "insert into user VALUES('{$username}', '{$password}', '{$email}', '{$type}')";
        if(mysqli_query($con, $sql)){
            return true;
        } else{
            return false;
        }
    }

    function getUser($name){
    $con = getConnection();
    $sql = "SELECT * FROM user WHERE name = '{$name}'";
    $result = mysqli_query($con, $sql);
    return mysqli_fetch_assoc($result);
    }

    function getAllUser() {
        $con = getConnection();
        $sql = "SELECT * FROM user";
        $result = mysqli_query($con, $sql);
        $users = [];
        while($row = mysqli_fetch_assoc($result)) {
            $users[] = $row;
        }
        return $users;
    }

?>
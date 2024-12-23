<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }

    if(isset($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        $user=getUser($name);

    }
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
        <h2>Edit User</h2>
        <form method="post" action="../controller/update.php" enctype=""> 
            Name: <input type="text" name="username" value="<?=$user['name']?>" /> <br>
            password: <input type="password" name="password" value="<?=$user['pass']?>" /><br>
            Email: <input type="email" name="email" value="<?=$user['email']?>" /><br>
            <input type="submit" name="submit" value="Submit" />
        </form>
</body>
</html>
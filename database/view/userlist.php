<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }

    $users = getAllUser();
?>


<html lang="en">
<head>
    <title>Userlist </title>
</head>
<body>
        <h2>User List</h2>    
        <a href="home.php"> Back </a> | 
        <a href="../controller/logout.php"> logout </a>

        <br>

        <table border=1>
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Type</th>
                <th>Action</th>
            </tr>
            <?php 
                for($i=0; $i<count($users); $i++){ 
            ?>
            <tr>
                <td><?php echo $users[$i]['name']; ?></td>
                <td><?=$users[$i]['email'] ?></td>
                <td><?=$users[$i]['type'] ?></td>
                <td>
                    <a href="edit.php?name=<?=$users[$i]['name']?>"> EDIT </a> |
                    <a href="delete.php"> DELETE </a> 
                </td>  
            </tr>

            <?php } ?>
        </table>
</body>
</html>

<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }
    $username_filter = isset($_GET['username']) ? $_GET['username'] : null;
    $users = getUserFilter($username_filter);
?>


<html lang="en">
<script>
        function searchByUsername() {
            let username = document.getElementById('search_username').value;
            let xhttp = new XMLHttpRequest();

            xhttp.open('GET', 'userlist.php?username=' + username, true);
            xhttp.send();

            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById('authortable').innerHTML = this.responseText;
                }
            };
        }
</script>
<head>
    <title>Userlist </title>
</head>
<body>

        <br>
        Search by Username: <input type="text" id="search_username" onkeyup="searchByUsername()" />
        <br><br>
        <div id="authortable">
        <h2>User List</h2>    
        <a href="./Admin_menu.php"> Back </a> | 
        <a href="../controller/logout.php"> logout </a>
        <br>
        <br>

        <table border=1>

                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Full Name</th>
                    <th>Phone Number</th>
                    <th>User Type</th>
                    <th>Action</th>
                </tr>

            <?php 
                for($i=0; $i<count($users); $i++){ 
            ?>
            <tr>
            <td><?php echo $users[$i]['id']; ?></td>
                <td><?php echo $users[$i]['username']; ?></td>
                <td><?=$users[$i]['fullname'] ?></td>
                <td><?=$users[$i]['phone'] ?></td>
                <td><?=$users[$i]['user_type'] ?></td>
                <td>
                    <a href="edit.php?name=<?=$users[$i]['username']?>"> EDIT </a> |
                    <a href="../controller/delete.php?name=<?=$users[$i]['username']?>"> DELETE </a> 
                </td>  
            </tr>
            <?php } ?>
        </table>
</body>
</html>

<?php
    session_start();
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }
    $username=$_SESSION['username'];
?>


<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
        <h1>Welcome <?=$username?></h1>    


        <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th colspan="2">Dashboard</th>
        </tr>
    </table>

        <h2>Author Actions</h2>
    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <th colspan="6">Actions</th>
        </tr>
        <tr>
            <td><a href="../controller/logout.php">Logout</a></td>
        </tr>
    </table>
</body>
</html>

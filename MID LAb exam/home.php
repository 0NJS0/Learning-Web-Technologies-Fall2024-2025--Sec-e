<?php
    session_start();
    if(!isset($_SESSION['status3'])){
        header('location: Login.html');  
    }
?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
<h2 align="center">Registration Form</h2>
    <table align="center">
        <tr>
        <td>
            <th>your blood group <?=$_SESSION['blood']?></th>
        </td>
        </tr>
        <tr>
        <td>
            <th>your Date of birth <?=$_SESSION['dob']?></th>
        </td>
        </tr>   
        <tr>
        <td>
            <th>your registered email <?=$_SESSION['email']?></th>
        </td>
        </tr>
        <tr>
        <td>
            <th>your Gender <?=$_SESSION['gender']?></th>
        </td>
        </tr> 
        <tr>
        <td>
            <th> Your Degrees:
                <?php
                    foreach ($_SESSION['degree'] as $selectedDegree) {
                        echo htmlspecialchars($selectedDegree) . ",";
                    }
                ?>
            </th>
        </td>
        </tr>
        <tr>
        <td>
        <a href="./logout.php"> logout </a> 
        </td>
        </tr>    
    </table>
</body>
</html>

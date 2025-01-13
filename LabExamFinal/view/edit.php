<?php
    session_start();
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['status'])){
        header('location: login.html');  
    }

    if(isset($_REQUEST['name'])){
        $name=$_REQUEST['name'];
        $user=getUser($name);
        $_SESSION['current_name']=$name;
    }
    
?>

<html>
<head>
    <title>Edit Page</title>
</head>
<body>
    <h2>Edit User</h2>
    <form method="post" action="../controller/updateCheck.php" onsubmit="return validateForm()"> 
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th colspan="2">Edit User Details</th>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" id="username" name="username_update" value="<?=$user['username']?>" /></td>
            </tr>
            <tr>
                <td>Full Name:</td>
                <td><input type="text" id="fullname" name="fullname_update" value="<?=$user['fullname']?>" /></td>
            </tr>
            <tr>
                <td>Phone Number:</td>
                <td><input type="text" id="phone" name="phone_update" value="<?=$user['phone']?>" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="update" value="Update" />
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<script>
    function validateForm() {
        let username = document.getElementById('username').value.trim();
        let fullname = document.getElementById('fullname').value.trim();
        let phone = document.getElementById('phone').value.trim();



        if (username === "") {
        alert("Username is required.");
        return false;
        }

        if (fullname === "") {
            alert("Full name is required.");
            return false;
        }




        if (phone === "") {
            alert("Phone no is required.");
            return false;
        }

    alert("Author Updated successfully!");
    return true;
}

</script>
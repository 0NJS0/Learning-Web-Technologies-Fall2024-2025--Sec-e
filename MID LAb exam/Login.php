<?php
    session_start();
    if(!isset($_SESSION['status1'])){
        header('location: Welcome.html');  
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
        <fieldset>
         <form method="post" action="logincheck.php">   
            <table border="0" align="center">
                <tr>
                    <h1 align="center">Login page</h1>
                </tr>
                <tr>
                    <td>
                        Username: <input type="text" name="Username" value="" />
                    </td>
                    <tr>
                        <td>
                        Password : <input type="password" name="pass" value="" />
                        </td>
                    </tr>
                    <td>
                        <input type="submit" name="login1" value="Login" />
                    </td>
                    <td>
                        <input type="reset" name="" value="Reset" />
                    </td>
                </tr>  
            </table>
        </fieldset>
    </form>
</body>
</html>

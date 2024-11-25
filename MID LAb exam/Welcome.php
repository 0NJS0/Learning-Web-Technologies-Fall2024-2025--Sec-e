<?php
    session_start();  
?>  
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Page</title>
</head>
<body>
        <fieldset>
         <form method="post" action="welcomecheck.php">   
            <table border="0" align="center">
                <tr>
                    <h1 align="center">Welcome page</h1>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="login" value="Login" />
                    </td>
                    <td>
                        <input type="submit" name="register" value="register" />
                    </td>
                </tr>  
            </table>
        </fieldset>
    </form>
</body>
</html>

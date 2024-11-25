<?php
    session_start();
    if(!isset($_SESSION['status2'])){
        header('location: Welcome.html');  
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <form action="registrationcheck.php" method="post" enctype="">
        <fieldset>
            <h2 align="center">Registration Form</h2>
            <th>PERSON PROFILE</th>
            <table border="1">
                <tr>
                    <td>Name:</td>
                    <td><input type="text" id="name" name="name" value=""></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <input type="radio" id="male" name="gender" value="male">Male
                        <input type="radio" id="female" name="gender" value="female">Female
                        <input type="radio" id="other" name="gender" value="other">Other
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth:</td>
                    <td><input type="date" id="dob" name="dob" placeholder="dd/mm/yyyy"></td>
                </tr>
                <tr>
                    <td>Blood Group:</td>
                    <td>
                        <select id="blood_group" name="blood_group">
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Degree:</td>
                    <td>
                        <input type="checkbox" id="ssc" name="degree[]" value="SSC">SSC
                        <input type="checkbox" id="hsc" name="degree[]" value="HSC">HSC
                        <input type="checkbox" id="bsc" name="degree[]" value="BSc">BSc.
                        <input type="checkbox" id="msc" name="degree[]" value="MSc">MSc.
                    </td>
                </tr>

                <tr>
                    <td>Password:</td>
                    <td><input type="password" id="pass" name="pass" >
                </tr>
                <tr>
                    <td>Confirm Passowrd</td>
                    <td><input type="password" id="Confirm pass" name="confirm_pass"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="Submit" value="Submit">
                        <input type="reset" value="Reset">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>

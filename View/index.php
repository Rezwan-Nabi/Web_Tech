<?php

include '../controller/Login_Process.php';
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="..//design//Login.css">
    </head>

    <body>
        <form method="POST" action="" onsubmit="return validateForm()">
            <div class="logo">
                
                <img src="..//Documents//Login.jpg" alt="Logo">
            </div>
            <fieldset>
                <legend>Login</legend>
                <p id="message"><?php echo($message) ?></p>
                <table>
                    <tr>
                        <td>Email : </td>
                        <td><input type="text" name="email"></td>
                    </tr>

                    <tr>
                        <td>Password : </td>
                        <td><input type="password" name="password"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td><input type="submit" name="submit" value="Login">
                        <input class="btnReset" type="submit" name="reset" value="Reset"></td>
                    </tr>

                    <tr>
                        <td></td>
                        <td>Don't have an account?? <a href="Regestration.php">Regestration</a> </td>
                    </tr>
                </table>
            </fieldset>
        </form>
        <script src="../JS/Login.js"></script>
    </body>
</html>
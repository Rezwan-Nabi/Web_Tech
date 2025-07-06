<?php
include '../controller/Reg_process.php';

?>
<html>
    <head>
        <title>Registration</title>
        <link rel="stylesheet" type="text/css" href="../design/Registration.css" >
    </head>
    <body>
<form method="post" action="" enctype="multipart/form-data">  
<fieldset id="inputForm">
    <legend id="inputLegend"><h1>Registration</h1></legend>
        <table id="inputTable">
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name">
            <?php echo ($nameErr);?></td>
        </tr>

        <tr>
            <td>E-mail:  </td>
            <td><input type="text" name="email" >
            <?php echo ($emailErr);?> </td>
        </tr> 

        <tr>
            <td>Password : </td>
            <td><input type="password" name="password">
            <?php echo($passErr); ?></td>
        </tr>

        <tr>
            <td>Confirm Password : </td>
            <td><input type="password" name="confirmPassword">
            <?php echo($confirmPassErr); ?></td>
        </tr>

        <tr>
            <td></td>
            <td> <input type="submit" name="submit" value="SUBMIT">
                 </td>
        </tr>

       <tr>
            <td></td>
            <td>
                or, if you have any account then login please!!! 
                <a href="index.php">Login
            </td>
        </tr>
        
    </table>

</form>
</body>
</html>

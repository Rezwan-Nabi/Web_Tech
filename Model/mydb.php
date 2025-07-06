<?php

class Model{

    //DataBase Connection
    function OpenConn(){
        $conn = new mysqli("localhost","root","","mydb");
        return $conn;
    }

     // Login Data, Using Email,Password.
    function CheckLoginCredentials($conn,$table,$email,$pass){
        $sqlQuery = "SELECT Email,Password FROM $table WHERE Email='$email' and Password='$pass'";
        $result = $conn->query($sqlQuery);
        return $result;
    }


     //Inset People......
    function AddPeople($conn,$table,$name, $email, $pass ,$confirmPass){
        $sqlQuery = "INSERT INTO $table(Name,Email,Password,Confirm_Password) VALUES('$name','$email','$pass','$confirmPass')";

        $result = $conn->query($sqlQuery);
        return $result;
    }

}

?>
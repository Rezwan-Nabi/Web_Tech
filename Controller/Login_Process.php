<?php

include '../database/mydb.php';
session_start();
$message = "";

$mydb = new Model();
$conObj = $mydb->OpenConn();


if(isset($_REQUEST['submit'])){
    if(empty($_REQUEST['email']) && empty($_REQUEST['password'])){
        $message = "Enter Valid Email & Password !!";
        }
    elseif(empty($_REQUEST['email'])){
        $message = ("Email is Invalid !!");
    }
    elseif(empty($_REQUEST['password'])){
        $message = "Password is Invalide !!";
    }
    else{
        $result = $mydb->CheckLoginCredentials($conObj,"registration_information",$_REQUEST['email'],$_REQUEST['password']);

        if($result->num_rows>0){
            $message = "Invalid UserName or Password !";
        }else{
            $_SESSION["Email"] = $_REQUEST['email'];
            echo("User Found !");
            header("location:../View/home.php");
        }
    }
}

?>
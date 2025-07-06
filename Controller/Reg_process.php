<?php

include '../database/mydb.php';

// define variables and set to empty values
$nameErr = $emailErr = $passErr = $confirmPassErr ="";
$name = $email = $pass = $confirmPass = "";
$passwordSize = "";
$hasError = "";

//Public name Validation........
if (isset($_REQUEST['submit'])) {
  if (empty($_REQUEST["name"])) {
    $nameErr = "* Name is required *";
  } else {
    $name = $_REQUEST["name"];
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }

  //Email Validation........
  if (empty($_REQUEST["email"])) {
    $emailErr = "* Email is required *";
  } else {
    $email = $_REQUEST["email"];
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  //Password......
      if(empty($_REQUEST['password'])){
        $passErr = "*Password is Required";
    }else{
        $pass = $_REQUEST['password'];
        //Validation, 
        $passwordSize = strlen($_REQUEST['password'])==8;
        if(!$passwordSize){
            $passErr = "*Password in Invalid!";
        }
    }

    //Confirm Password.......
    if(empty($_REQUEST['confirmPassword'])){
        $confirmPassErr = "ConfirmPassword is required!";
    }elseif($_REQUEST['confirmPassword'] != $_REQUEST['password']){
        $confirmPassErr = "Password is not matched!";
    }else{
        $confirmPass = $_REQUEST['confirmPassword'];
        $confirmPassErr = "Password Matched!";
    }

    //DATABASE Connection....
    if($hasError !=1){
      $mydb = new Model();
      $conObj = $mydb->OpenConn();
      $result = $mydb->AddPeople($conObj,"registration_information",$_REQUEST['name'],$_REQUEST['email'],$_REQUEST['password'],$_REQUEST['confirmPassword']);

      if($result==TRUE){
        echo("Successfully Added");
    }else{
        echo("Error Occoured".$conObj->error);
    }
  }else{
      echo("Please complete the validation!!");
  }

}

?>
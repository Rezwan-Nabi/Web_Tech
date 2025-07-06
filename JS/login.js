function validateForm(){
    if(validateEmail()==false || validatePassword()==false){
        return false;
    }else{
        return true;
    }
}


function validateEmail(){
    var name = document.getElementById("email").value;
    if(name==""){
        document.getElementById("message").innerHTML = "Please Enter your User Email";
        return false;
    }else{
        return true;
    }
}

function validatePassword(){
    var pass = document.getElementById("password").value;
    if(pass==""){
        document.getElementById("message").innerHTML = "Please Enter your Password !";
        return false;
    }else{
        return true;
    }
}
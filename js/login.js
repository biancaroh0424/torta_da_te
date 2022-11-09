function formLogin(){

var emailCheck = document.getElementById("email_login");
var emailValid = email_login.value.length;
var emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
var pwLogin = document.getElementById("pw_login");


if (emailCheck.value==""){

    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write your e-mail!";

    document.getElementById("email_login").style.borderColor="#C53F3F";
    return false;
};

if (emailValid < 10 || emailValid > 64){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_login").style.borderColor="#C53F3F";
    return false;
};

if(emailCheck.value == emailReg){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_login").style.borderColor="#C53F3F";
    return false;
};


if (pwLogin.value==""){
    
    var errorMessage = document.getElementById("errorMessage");
    
    errorMessage.innerHTML = "Please write your password";
    
    document.getElementById("pw_login").style.borderColor="#C53F3F";

    return false;

};

};

function showPw(){

    var showPassword = document.getElementById("pw_login");

    var eyeChange = document.getElementsByClassName("pw_noshow");
    
    if (showPassword.type === "password"){     
        
        document.getElementsByClassName("pw_noshow")
        showPassword.type="text";
    
    }else{

        // document.getElementsByClassName("pw_noshow").src = '/images/noshow_pw.png';
        showPassword.type="password";
    };
};


function formSubscribe(){
var emailCheck = document.getElementById("user_email");
var emailValid = user_email.value.length;
var emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
var userName = document.getElementById("user_name");



if(userName.value==""){
    var errorMessage = document.getElementById("errorName");
    errorMessage.innerHTML = "Please write your name!"

    document.getElementById("user_name").style.borderColor="#C53F3F";
    return false;
};


if (emailCheck.value==""){

    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write your e-mail!";

    document.getElementById("user_email").style.borderColor="#C53F3F";
    return false;
};

if (emailValid < 10 || emailValid > 64){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("user_email").style.borderColor="#C53F3F";
    return false;
};

if(emailCheck.value == emailReg){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("user_email").style.borderColor="#C53F3F";
    return false;
};



};


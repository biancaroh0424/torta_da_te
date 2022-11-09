function formSignup(){
var emailCheck = document.getElementById("email_signup");
var emailValid = email_signup.value.length;
var emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

var pwValid = document.getElementById("pw_signup");



if (emailCheck.value==""){

    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write your e-mail!";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};

if (emailValid < 10 || emailValid > 64){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};

if(emailCheck.value == emailReg){
    var errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};


if(pwValid.value ==""){
    var errorMessage = document.getElementById("errorPw");
    errorMessage.innerHTML = "Please write your own Password";

    document.getElementById("pwSignupWrap").style.borderColor="#C53F3F";
    return false;
};

};



function pwValidation(){
    var myInput = document.getElementById("pw_signup");
    var UpperCaseLetters = /[A-Z]/g;
    
    var capital = document.getElementById("capital");
    
    if (myInput.value.match(UpperCaseLetters)){
        capital.classList.remove("signup_avail_li");
        capital.classList.add("valid");

    }else{
        capital.classList.remove("valid");
        capital.classList.add("signup_avail_li");

    };

    var numbersMatch = /[0-9]/g;
    var number = document.getElementById("number");
    if(myInput.value.match(numbersMatch)){
        number.classList.remove("signup_avail_li");
        number.classList.add("valid");

    }else{
        number.classList.remove("valid");
        number.classList.add("signup_avail_li");

    };

    var length = document.getElementById("length");
    if(myInput.value.length >= 8){
        length.classList.remove("signup_avail_li");
        length.classList.add("valid");

    }else{
        length.classList.remove("valid");
        length.classList.add("signup_avail_li");

    }

    var symbolMatch = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/;
    var symbol = document.getElementById("symbol");
    
    if(myInput.value.match(symbolMatch)){
        symbol.classList.remove("signup_avail_li");
        symbol.classList.add("valid");

    }else{
        symbol.classList.remove("valid");
        symbol.classList.add("signup_avail_li");

    };

};



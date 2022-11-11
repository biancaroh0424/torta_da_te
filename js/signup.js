function formSignup(){
var emailCheck = document.getElementById("email_signup");
let emailValid = email_signup.value.length;
let emailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;

let pwValid = document.getElementById("pw_signup");



if (emailCheck.value==""){

    let errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write your e-mail!";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};

if (emailValid < 10 || emailValid > 64){
    let errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};

if(emailCheck.value == emailReg){
    let errorMessage = document.getElementById("errorEmail");
    errorMessage.innerHTML = "Please write valid Email";

    document.getElementById("email_signup").style.borderColor="#C53F3F";
    return false;
};


if(pwValid.value ==""){
    let errorMessage = document.getElementById("errorPw");
    errorMessage.innerHTML = "Please write your own Password";

    document.getElementById("pwSignupWrap").style.borderColor="#C53F3F";
    return false;
};

};



function pwValidation(){
    let myInput = document.getElementById("pw_signup");
    let UpperCaseLetters = /[A-Z]/g;
    
    let capital = document.getElementById("capital");
    
    if (myInput.value.match(UpperCaseLetters)){
        capital.classList.remove("signup_avail_li");
        capital.classList.add("valid");

    }else{
        capital.classList.remove("valid");
        capital.classList.add("signup_avail_li");

    };

    let numbersMatch = /[0-9]/g;
    let number = document.getElementById("number");
    if(myInput.value.match(numbersMatch)){
        number.classList.remove("signup_avail_li");
        number.classList.add("valid");

    }else{
        number.classList.remove("valid");
        number.classList.add("signup_avail_li");

    };

    let length = document.getElementById("length");
    if(myInput.value.length >= 8){
        length.classList.remove("signup_avail_li");
        length.classList.add("valid");

    }else{
        length.classList.remove("valid");
        length.classList.add("signup_avail_li");

    }

    let symbolMatch = /[\{\}\[\]\/?.,;:|\)*~`!^\-+<>@\#$%&\\\=\(\'\"]/;
    let symbol = document.getElementById("symbol");
    
    if(myInput.value.match(symbolMatch)){
        symbol.classList.remove("signup_avail_li");
        symbol.classList.add("valid");

    }else{
        symbol.classList.remove("valid");
        symbol.classList.add("signup_avail_li");

    };

};

function checkEmailExist(g_email){

    let errorMessage = document.getElementById("errorEmail");

    
    if (emailCheck.value==""){

        errorMessage.innerHTML = "Please write your e-mail!";
    
        document.getElementById("email_signup").style.borderColor="#C53F3F";
        return false;
    
    }else if (emailValid < 10 || emailValid > 64){
        errorMessage.innerHTML = "Please write valid Email";
    
        document.getElementById("email_signup").style.borderColor="#C53F3F";
        return false;
    }else if(emailCheck.value == emailReg){
            errorMessage.innerHTML = "Please write valid Email";
        
            document.getElementById("email_signup").style.borderColor="#C53F3F";
            return false;
    } else{
        var xmlhttp = fncGetXMLHttpRequest();

        // 아이디를 체크할 php 페이지에 체크 하려하는 id 값을 파라미터로 전송
        // alert('id_check_ajax.php?u_id='+g_id);
        // return false;
        xmlhttp.open('GET', 'id_check_ajax.php?u_id='+g_id, false);

        xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded; charset=UTF-8');

        xmlhttp.onreadystatechange = function (){
            if( xmlhttp.readyState=='4' && xmlhttp.status==200 ){
                if( xmlhttp.status==500 || xmlhttp.status==404 || xmlhttp.status==403 )
                    alert( xmlhttp.status );
                else{
                    var txt = xmlhttp.responseText;
                    txt = txt.replace(/\n/g, ""); // 행바꿈 제거
                    txt = txt.replace(/\r/g, ""); // 엔터값 제거
                    txt = txt.replace(/\s+/, ""); // 왼쪽 공백 제거
                    txt = txt.replace(/\s+$/g, ""); // 오른쪽 공백 제거
                    // alert("페이지에 입력된 값 : " + g_id + "\r처리 페이지에서 반환된 값 : " + txt);

                    if(txt=='Y') {
                        dsp.innerHTML = '이미 가입된 아이디입니다.';
                        dsp.className = 'redText';
                    } else{
                        dsp.innerHTML = '사용할 수 있는 아이디입니다.';
                        dsp.className = 'blueText';
                    }
                }
            }
        }
    }
    xmlhttp.send();
}

function fncGetXMLHttpRequest(){
    if (window.ActiveXObject){
        try{
            return new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(e){
            try{
                return new ActiveXObject("Microsoft.XMLHTTP");
            } 
        catch(e1) { return null; }
        }
        //IE 외 파이어폭스 오페라 같은 브라우저에서 XMLHttpRequest 객체 구하기
    } else if (window.XMLHttpRequest){
        return new XMLHttpRequest();
    } else{
        return null;
    }
}
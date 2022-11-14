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
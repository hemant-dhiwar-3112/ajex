let flag1 = 1;

var fname = document.getElementById('inputname');
fname.addEventListener('input', function () {
    let na = /^[A-Za-z ]+$/;
    if (fname.value === "") {
        document.getElementById("mess1").innerText = "The Name is required and can't be empty";
        document.getElementById("mess1").setAttribute('class', 'invalid-feedback');
        fname.setAttribute('class', 'is-invalid form-control');
        flag1 = 0;
    }
    else if (!na.test(fname.value)) {
        document.getElementById("mess1").innerText = "Enter Valid name";
        document.getElementById("mess1").setAttribute('class', 'invalid-feedback');
        fname.setAttribute('class', 'is-invalid form-control');
        flag1 = 0;
    }
    else {
        document.getElementById("mess1").innerText = "";
        document.getElementById("mess1").setAttribute('class', 'valid-feedback');
        fname.setAttribute('class', 'is-valid form-control');
        flag1 = 1;
    }
});


let flag2 = 1;
var femail = document.getElementById('inputemail');
femail.addEventListener('input', function () {
    let em = /^[A-Za-z][A-Za-z0-9._]{3,20}@[A-Za-z0-9]{4,8}.[A-Za-z.]{2,9}$/;

    if (femail.value == "") {
        document.getElementById("mess2").innerText = "The Email is required and can't be empty";
        document.getElementById("mess2").setAttribute('class', 'invalid-feedback');
        femail.setAttribute('class', 'is-invalid form-control');
        flag2 = 0;
    }
    else if (!em.test(femail.value)) {
        document.getElementById("mess2").innerText = "Enter Valid Email";
        document.getElementById("mess2").setAttribute('class', 'invalid-feedback');
        femail.setAttribute('class', 'is-invalid form-control');
        flag2 = 0;
    }
    else {
        document.getElementById("mess2").innerText = "";
        document.getElementById("mess2").setAttribute('class', 'valid-feedback');
        femail.setAttribute('class', 'is-valid form-control');
        flag2 = 1;
    }
});




let flag3 = 1;
var fphone = document.getElementById('inputphone');
fphone.addEventListener('input', function () {
    let num = /^[6-9]+[0-9]{0,10}$/;
    if (fphone.value === "") {
        document.getElementById("mess3").innerText = "The Moblie Number is required and can't be empty";
        document.getElementById("mess3").setAttribute('class', 'invalid-feedback');
        fphone.setAttribute('class', 'is-invalid form-control');
        flag3 = 0;
    } else if (!num.test(fphone.value)) {
        document.getElementById("mess3").innerText = "Enter a valid Mobile Number";
        document.getElementById("mess3").setAttribute('class', 'invalid-feedback');
        fphone.setAttribute('class', 'is-invalid form-control');
        flag3 = 0;
    } else if (fphone.value.length != 10) {
        document.getElementById("mess3").innerText = "Enter a valid Mobile Numb";
        document.getElementById("mess3").setAttribute('class', 'invalid-feedback');
        fphone.setAttribute('class', 'is-invalid form-control');
        flag3 = 0;
    }
    else {
        document.getElementById("mess3").innerText = "";
        document.getElementById("mess3").setAttribute('class', 'valid-feedback');
        fphone.setAttribute('class', 'is-valid form-control');
        flag3 = 1;
    }
});



let flag4 = 1;

var fcity = document.getElementById('inputcity');
fcity.addEventListener('input', function () {
    let na = /^[A-Za-z ]+$/;
    if (fcity.value === "") {
        document.getElementById("mess4").innerText = "The city name is required and can't be empty";
        document.getElementById("mess4").setAttribute('class', 'invalid-feedback');
        fcity.setAttribute('class', 'is-invalid form-control');
        flag4 = 0;
    }
    else if (!na.test(fcity.value)) {
        document.getElementById("mess4").innerText = "Enter Valid city name" ;
        document.getElementById("mess4").setAttribute('class', 'invalid-feedback');
        fcity.setAttribute('class', 'is-invalid form-control');
        flag4 = 0;
    }
    else {
        document.getElementById("mess4").innerText = "";
        document.getElementById("mess4").setAttribute('class', 'valid-feedback');
        fcity.setAttribute('class', 'is-valid form-control');
        flag4 = 1;
    }
});
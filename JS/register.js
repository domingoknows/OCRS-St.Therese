const forms= document.querySelector(".forms"),
    pwShowHide = document.querySelectorAll(".eye-icon"),
    links = document.querySelectorAll(".link");

pwShowHide.forEach(eyeIcon => {
    eyeIcon.addEventListener("click", () => {
        let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");
        
        pwFields.forEach(password => {
            if(password.type === "password"){
                password.type = "text";
                eyeIcon.classList.replace("bx-hide", "bx-show");
                return;
            }
            password.type = "password";
            eyeIcon.classList.replace("bx-show", "bx-hide");
        })
    })
})
const namee = document.getElementById('namee');
const email = document.getElementById('email');
const password = document.getElementById('password');
const confirmpass = document.getElementById('confirmpass');
const form = document.getElementById('form');

const email_error = document.getElementById('email_error');
const password_error = document.getElementById('password_error');
const confirmpass_error = document.getElementById('confirmpass_error');
const namee_error = document.getElementById('namee_error');


form.addEventListener('submit', (e) =>
{
    var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

    if(namee.value === '' || namee.value == null)
    {
        e.preventDefault();
        namee_error.innerHTML = "Name is required";
    }else{
        namee_error.innerHTML = "";
    }
    if(!email.value.match(email_check))
    {
        e.preventDefault();
        email_error.innerHTML = "Please enter a valid email";
    }else{
        email_error.innerHTML = "";
    }
    if(password.value.length <=7){
        e.preventDefault();
        password_error.innerHTML = "Password must be more than 7 letters";
    }else if(password.value.length != confirmpass.value.length){
        e.preventDefault();
        password_error.innerHTML = "Password is not the same";
    }else{
        password_error.innerHTML = "Password Match";
    }
    if(confirmpass.value.length <=7){
        e.preventDefault();
        confirmpass_error.innerHTML = "Password must be more than 7 letters";
    }else if (confirmpass.value.length != password.value.length){
        e.preventDefault();
        confirmpass_error.innerHTML = "Password is not the same";
    }else{
        confirmpass_error.innerHTML = "Password Match";
    }
})

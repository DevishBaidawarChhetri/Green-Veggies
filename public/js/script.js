// Loader
function loader() {
    const loader = document.getElementById("loader");
    const body = document.getElementById("body");
    loader.style.display = 'none';
    body.style.position = 'static';
    body.style.overflowY = 'auto';
}

// Play and pause video

// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
    if (video.paused) {
        video.play();
        document.querySelector(".videoPause").style.visibility = "visible";
        document.querySelector(".videoPlay").style.visibility = "hidden";
    } else {
        video.pause();
        document.querySelector(".videoPlay").style.visibility = "visible";
        document.querySelector(".videoPause").style.visibility = "hidden";
    }
}

// Toggle Password Begins
let passwordVisibility = false;
function showHidePassword(){
    const showPassword = document.querySelector(".showPassword");
    const hidePassoword = document.querySelector(".hidePassword");

    if(passwordVisibility === false){
        hidePassoword.style.display = "inline";
        showPassword.style.display = "none";
        document.getElementById("password").type = "text";
        passwordVisibility = true;
    }else{
        showPassword.style.display = "inline";
        hidePassoword.style.display = "none";
        document.getElementById("password").type = "password";
        passwordVisibility = false;
    }
}
// Toggle Password Ends

// Change Password's Toggle Password Begins
let showPassword = false;
function showHidePasswordChangePassword(){
    let oldPassword = document.getElementById("oldPassword");
    let newPassword = document.getElementById("newPassword");
    let confirmPassword = document.getElementById("confirmPassword");

    if(showPassword == false){
        oldPassword.type = "text";
        newPassword.type = "text";
        confirmPassword.type = "text";
        showPassword = true;
    }else{
        oldPassword.type = "password";
        newPassword.type = "password";
        confirmPassword.type = "password";
        showPassword = false;
    }
}
// Change Password's Toggle Password Begins

// Subscribe Us Begins
function subscribeValidation(){
    var arrValue = document.getElementsByClassName("email");
    var insertedEmail = arrValue[0].value;
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(insertedEmail))
    {
        alert("Email address format invalid!");
        return false;
    }
}
// Subscribe Us Ends

// Registration Validation Begins
function registrationValidation()
{
    // Name Validation
    var arrName = document.getElementsByClassName("name");
    var number = document.getElementsByClassName("telephone");
    var insertedName = arrName[0].value;
    var insertedTelephone = number[0].value;
    if (!/^[a-z A-Z]*$/g.test(insertedName))
    {
        alert("Only Alphanets Allowed in Name!");
        return (false);
    }
    if (insertedTelephone.length < 10){
        alert("Phone Number should contain 10 digits!");
        return false;
    }
}
// Registration Validation Ends

// Login Validation Begins
function loginValidation()
{
    var email = document.forms["loginValidationForm"]["email"].value;
    var password = document.forms["loginValidationForm"]["password"].value;
    if (email === "")
    {
        alert("Please enter email!!!");
        return false;
    }
    if (!/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.loginValidationForm.email.value))
    {
        alert("Email address format invalid!");
        return false;
    }
    if(password === ""){
        alert("Please enter password!!!");
        return false;
    }
}
// Login Validation Ends

// Contafct Form Validation begins
function contactValidation(){

    // Name Validation
    var arrName = document.getElementsByClassName("name");
    var insertedName = arrName[0].value;
    if (!/^[a-z A-Z]*$/g.test(insertedName))
    {
        alert("Only Alphanets Allowed in Name!");
        return (false);
    }
}

// Contact validation ends

// Torch Effect Begins
const container = document.querySelector(".torch-container");
container.addEventListener("mousemove", (e)=>{
    const torch = document.querySelector(".torch");
    torch.style.clipPath = `circle(100px at ${e.offsetX}px ${e.offsetY}px)`;
});
// Torch Effect Ends

function openMenu(){
document.getElementById("mobileMenu").style.transform="translateX(0)";
}

function closeMenu(){
document.getElementById("mobileMenu").style.transform="translateX(100%)";
}

function showSignup(){

let loginBox = document.getElementById("loginBox");
let signupBox = document.getElementById("signupBox");

loginBox.style.opacity="0";
loginBox.style.transform="translateY(-20px)";

setTimeout(()=>{
loginBox.classList.add("hidden");
signupBox.classList.remove("hidden");

signupBox.style.opacity="1";
signupBox.style.transform="translateY(0px)";
},300);

}



function showLogin(){

let loginBox = document.getElementById("loginBox");
let signupBox = document.getElementById("signupBox");

signupBox.style.opacity="0";
signupBox.style.transform="translateY(20px)";

setTimeout(()=>{
signupBox.classList.add("hidden");
loginBox.classList.remove("hidden");

loginBox.style.opacity="1";
loginBox.style.transform="translateY(0px)";
},300);

}

window.onload = function() {

    const urlParams = new URLSearchParams(window.location.search);
    const mode = urlParams.get('mode');

    let loginBox = document.getElementById("loginBox");
    let signupBox = document.getElementById("signupBox");

    if(mode === "signup"){
        loginBox.classList.add("hidden");
        signupBox.classList.remove("hidden");
    } else {
        signupBox.classList.add("hidden");
        loginBox.classList.remove("hidden");
    }

};

setTimeout(()=>{
    let msg = document.getElementById("msgBox");
    if(msg){
        msg.style.opacity = "0";
        msg.style.transition = "0.5s";
        setTimeout(()=> msg.style.display="none",500);
    }
},2000);
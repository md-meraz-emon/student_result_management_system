function openMenu(){
document.getElementById("mobileMenu").style.transform="translateX(0)";
}

function closeMenu(){
document.getElementById("mobileMenu").style.transform="translateX(100%)";
}



setTimeout(()=>{
    let msg = document.getElementById("msgBox");
    if(msg){
        msg.style.opacity = "0";
        msg.style.transition = "0.5s";
        setTimeout(()=> msg.style.display="none",500);
    }
},2000);

document.addEventListener("DOMContentLoaded", function(){

let text = "Welcome To Student Result Management System.";
let i = 0;

function typeWriter(){

    if(i < text.length){
        document.getElementById("heroText").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter,80);
    }
    else{
        setTimeout(()=>{
            document.getElementById("heroText").innerHTML = "";
            i = 0;
            typeWriter();
        },2000);
    }

}

typeWriter();

});
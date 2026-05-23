function openMenu(){
document.getElementById("mobileMenu").style.transform="translateX(0)";
}

function closeMenu(){
document.getElementById("mobileMenu").style.transform="translateX(100%)";
}

function submitResult(){

let name = document.getElementById("studentName").value.trim();
let id = document.getElementById("studentId").value.trim();
let subject = document.getElementById("subject").value.trim();
let marks = document.getElementById("marks").value.trim();
let department = document.getElementById("department").value.trim();

let msg = document.getElementById("msg");

/* ===== Required Field Check ===== */

if(name === "" || id === "" || subject === "" || marks === "" || department === ""){
    msg.innerText = "⚠ All fields are required!";
    msg.style.color = "red";
    return false;
}

/* ===== Name Validation (Only letters + space) ===== */

let namePattern = /^[A-Za-z\s]+$/;

if(!namePattern.test(name)){
    msg.innerText = "⚠ Name must contain only letters!";
    msg.style.color = "red";
    return false;
}

/* ===== ID Validation (Only number) ===== */

if(isNaN(id)){
    msg.innerText = "⚠ ID must be numeric!";
    msg.style.color = "red";
    return false;
}

/* ===== Marks Validation ===== */

if(isNaN(marks)){
    msg.innerText = "⚠ Marks must be a number!";
    msg.style.color = "red";
    return false;
}

if(marks < 0 || marks > 100){
    msg.innerText = "⚠ Marks must be between 0 - 100!";
    msg.style.color = "red";
    return false;
}

/* ===== Subject Validation (If text input) ===== */

let validSubjects = ["math", "english", "science", "physics"];

if(!validSubjects.includes(subject.toLowerCase())){
    msg.innerText = "⚠ Invalid Subject!";
    msg.style.color = "red";
    return false;
}

/* ===== Success ===== */

msg.innerText = "✅ Data Valid!";
msg.style.color = "green";

return true; // allow form submit
}

setTimeout(()=>{
    let msg = document.getElementById("submitMsg");
    if(msg){
        msg.style.opacity = "0";
        msg.style.transition = "0.5s";
        setTimeout(()=> msg.style.display="none",500);
    }
},2000);
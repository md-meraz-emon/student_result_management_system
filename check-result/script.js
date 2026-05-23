
function openMenu(){
    document.getElementById("mobileMenu").style.transform="translateX(0)";
}

function closeMenu(){
    document.getElementById("mobileMenu").style.transform="translateX(100%)";
}

/* ===== Result Validation ===== */

function checkResult(){

    let name = document.getElementById("studentName").value.trim();
    let id = document.getElementById("studentId").value.trim();
    let subject = document.getElementById("subject").value.trim();
    let resultBox = document.getElementById("result");

    // Empty check
    if(name === "" || id === "" || subject === ""){
        resultBox.innerHTML = "⚠ Please fill all fields!";
        resultBox.style.color = "red";
        return false; // 🚨 FORM SUBMIT বন্ধ করবে
    }

    // ID number check
    if(isNaN(id)){
        resultBox.innerHTML = "⚠ ID must be a number!";
        resultBox.style.color = "red";
        return false;
    }

    return true; // ✅ সব ঠিক হলে submit হবে
}

/* ===== Download ===== */

function downloadResult(){
    window.print();
}
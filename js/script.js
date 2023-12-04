
var x = document.getElementById("navbar");
function toggleNavbar() {
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function service() {
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function about() {
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}

function contact() {
    if (x.style.display === "block") {
        x.style.display = "none";
    }
}
const modal = document.getElementById("bg-modal");
const loginopenModalBtn = document.getElementById("userlogin");
const signpopenModalBtn = document.getElementById("user_add");
const staffloginBtn = document.getElementById("stafflogin");
const closeModalBtn = document.querySelector(".close");
const signupform = document.getElementById("signupform");
const loginform = document.getElementById("loginform");
const staffform = document.getElementById("stafffrom");

function loginopenModal() {
    var newHeading = "User Login";
    var heading = document.getElementById("heading");
    heading.textContent = newHeading;
    modal.style.display = "flex";
    loginform.style.display = "block";
    signupform.style.display = "none";
    staffform.style.display = "none";
}

function signupopenModal() {
    var newHeading = "Sign Up";
    var heading = document.getElementById("heading");
    heading.textContent = newHeading;
    modal.style.display = "flex";
    loginform.style.display = "none";
    signupform.style.display = "block";
    staffform.style.display = "none";
}

function staffloginopenModal() {
    var newHeading = "Staff Login";
    var heading = document.getElementById("heading");
    heading.textContent = newHeading;
    modal.style.display = "flex";
    loginform.style.display = "none";
    signupform.style.display = "none";
    staffform.style.display = "block";
}

function closeModal() {
    modal.style.display = "none";
}
//$(document).ready(function () {
    loginopenModalBtn.addEventListener("click", loginopenModal);
    signpopenModalBtn.addEventListener("click", signupopenModal);
    closeModalBtn.addEventListener("click", closeModal);
    staffloginBtn.addEventListener("click", staffloginopenModal);
// });


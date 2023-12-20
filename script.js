const hamburger = document.querySelector(".hamburger");
const nav = document.querySelector("#nav-links");

function mobileMenu() {
    hamburger.classList.toggle("active");
    nav.classList.toggle("active");
}

hamburger.addEventListener("click", mobileMenu);

function closeMenu() {
    hamburger.classList.remove("active");
    nav.classList.remove("active");
}

const navCall = document.getElementById("nav-call");
const navCallNumber = document.getElementById("nav-call-number");
const width = window.innerWidth;

(function phoneNumberAppear() {
    let i = 0;
    navCall.addEventListener("click", () => {
        i++;
        if(width > 1024){
            if(i%2 === 1){
                navCallNumber.style.color = "var(--dark-blue)";
                navCallNumber.style.transform = "translateY(0px)";
            } else {
                navCallNumber.style.color = "var(--light-blue)";
                navCallNumber.style.transform = "translateY(-12px)";
            }
        } else {
            if(i%2 === 1){
                navCallNumber.style.color = "var(--light-blue)";
                navCallNumber.style.transform = "translateX(0px)";
            } else {
                navCallNumber.style.color = "var(--dark-blue)";
                navCallNumber.style.transform = "translateX(-178px)";
            }
        }
    });
})();

const baBefore = document.querySelector(".ba-before");
const baLine = document.querySelector(".ba-line");
const baLineStyles = window.getComputedStyle(baLine);

(function drag() {
    let left = baLineStyles.getPropertyValue("left");
    baBefore.style.width = left;
})();
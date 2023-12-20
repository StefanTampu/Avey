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

(function phoneNumberAppear() {
    let i = 0;
    navCall.addEventListener("click", () => {
        i++;
        if(i%2 === 1){
            navCallNumber.style.color = "var(--dark-blue)";
            navCallNumber.style.transform = "translateY(0px)";
        } else {
            navCallNumber.style.color = "var(--light-blue)";
            navCallNumber.style.transform = "translateY(-12px)";
        }
    });
})();
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

const baImages = document.querySelectorAll(".ba-image");
for (const baImage of baImages){
    baImage.querySelector(".slider").addEventListener("input", (e) => {
        baImage.style.setProperty("--position", `${e.target.value}%`)
    })
}

function pictureLooping(){
    const p1 = document.getElementById("p1");
    const p2 = document.getElementById("p2");
    const p3 = document.getElementById("p3");
    const p4 = document.getElementById("p4");
    const pictures1 = ["p101", "p102", "p103"];
    const pictures2 = ["p201", "p202"];
    const pictures3 = ["p301", "p302", "p303"];
    const pictures4 = ["p401", "p402", "p403", "p404"];
    let i = 0;

    function changeImage(pictureName, picturesGroup){
        i++;
        let q = i%picturesGroup.length;
        pictureName.style.backgroundImage = `url(Resources/pictures-loop/${picturesGroup[q]}.jpg)`;
/*        if (i < picturesGroup.length){
            pictureName.style.backgroundImage = `url(Resources/pictures-loop/${picturesGroup[i]}.jpg)`;
        } else if (i === picturesGroup.length){
            i = 0;
            pictureName.style.backgroundImage = `url(Resources/pictures-loop/${picturesGroup[i]}.jpg)`;
        }*/
    }

    setInterval(function(){
        changeImage(p1, pictures1);
    }, 3000);

    setInterval(function(){
        changeImage(p2, pictures2);
    }, 4000);

    setInterval(function(){
        changeImage(p3, pictures3);
    }, 2700);

    setInterval(function(){
        changeImage(p4, pictures4);
    }, 2300)
}

pictureLooping();


/* const reviewsContainer = document.querySelector("#reviews-container");

let isDragging = false, startX, startScrollLeft;

const dragStart = (e) => {
    isDragging = true;
    reviewsContainer.classList.add("dragging");
    startX = e.pageX;
    startScrollLeft = reviewsContainer.scrollLeft;
}

const dragReviews = (e) => {
    reviewsContainer.scrollLeft = e.pageX;
}

const dragStop = () => {
    isDragging = false;
    reviewsContainer.classList.remove("dragging");
}

reviewsContainer.addEventListener("mousemove", dragReviews);
document.addEventListener("mouseup", dragStop);*/

/*
const baImage = document.querySelector(".ba-image");
const baBefore = document.querySelector(".ba-before");
const baLine = document.querySelector(".ba-line");
const baLineStyles = window.getComputedStyle(baLine);
let startPosX = 0;
let newPosX = 0;

(function dragBaLine(){
    const {
        y: baImageY
    } = baImage.getBoundingClientRect();

    baLine.addEventListener("mousedown", function(e) {
        e.preventDefault();
        baLine.addEventListener("mouseup", mouseUp);
        baLine.addEventListener("mousemove", mouseMove);
    });

    function drag() {
        let left = baLineStyles.getPropertyValue("left");
        baBefore.style.width = left;
    };

    function mouseMove(e) {
        e.preventDefault();
        baLine.style.left = (e.clientX - baImageY) + "px";
        drag();
    }

    function mouseUp() {
        baLine.removeEventListener("mouseup", mouseUp);
        baLine.removeEventListener("mousemove", mouseMove);
    }
})();

baLine.addEventListener("mousedown", function(e){
    startPosX = e.clientX;

    let offsetX = e.clientX - parseInt(window.getComputedStyle(this).left);
    
    document.addEventListener("mousemove", function mouseMove(e) {
        newPosX = startPosX - e.clientX;
        startPosX = e.clientX;
        if (baLine.offsetLeft >= 0 && baLine.offsetLeft <= "100%") {
            baLine.style.left = (baLine.offsetLeft - newPosX) + "px";
        } else if (baLine.offsetLeft < 0) {
            baLine.offsetLeft = 0;
            baLine.style.left = 0 + "px"; 
        }
        drag();
        console.log(newPosX);
    });

    document.addEventListener("mouseup", function(){
        document.removeEventListener("mousemove", mouseMove);
    })
})

function drag() {
    let left = baLineStyles.getPropertyValue("left");
    baBefore.style.width = left;
};*/
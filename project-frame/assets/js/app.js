
let currentUrl = location.href;
// let urlArr = currentUrl.split("/");
// let currentPage = urlArr[urlArr.length - 1];
let navLinks = document.querySelectorAll(".nav-link");
navLinks.forEach(index => {
    if(index.href === currentUrl){
        index.classList.add("active");
    }
});
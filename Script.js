const btnTop = document.getElementById("btnTop");

window.addEventListener("scroll", function () {
    if (window.scrollY > 500) {
        btnTop.classList.add("show");
    } else {
        btnTop.classList.remove("show");
    }
});

btnTop.addEventListener("click", function () {
    window.scrollTo(0, 0);
});
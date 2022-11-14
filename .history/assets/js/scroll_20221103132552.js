window.onscroll = function () { scrollFunction() };
function scrollFunction() {

    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
        document.getElementById("logo_none").style.display = "block";
    } else {
        document.getElementById("logo_none").style.display = "none";
    }
}

;

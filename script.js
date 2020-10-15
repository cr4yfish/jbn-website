function buttonTransitionFunction(x) {
    x.classList.toggle("change");
}


var isShown = false; 

function toggleNavBar() {
    if (isShown == false) {
        document.getElementById("navbar").style.height = "100px";
        isShown = true;
    } else if (isShown == true) {
        document.getElementById("navbar").style.height = "0%";
        isShown = false;
    }
}
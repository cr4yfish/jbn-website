function buttonTransitionFunction(x) {
    x.classList.toggle("change");
}

var isShown = false; 

function toggleNavBar() {
    if (isShown == false) {
        document.getElementById("navbar").style.height = "10vh";
        isShown = true;
    } else if (isShown == true) {
        document.getElementById("navbar").style.height = "0%";
        isShown = false;
    }
}

function pop_up_trigger(time) {
    document.getElementById("email_confirm_popup").style.opacity = "1";
}
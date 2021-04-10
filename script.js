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
const sleep = (seconds) => {
    return new Promise(resolve => setTimeout(resolve, seconds))
}

function pop_up_trigger() {
    sleep(4).then(
        alert("Danke für deine Mitteilung")
        );
    
}
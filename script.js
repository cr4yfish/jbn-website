function checkTheme() {
    // find out if darkTheme has already been initialized.
    if ( localStorage.getItem("darkTheme") == "true" ) {
        // darkTheme is in storage and set true, which means dark theme should be enabled.
        console.log( "darkTheme has been set as true");
        enableTheme(true);
    } else {
        // darkTheme is either false or has not changed yet, which means 
        // the website should default to darkTheme = true.
        
        // store darkTheme = false in case it has not been stored yet.
        // If it has, darkTheme will overwrite darkTheme == false, with darkTheme = false, which
        // doesnt change anything.
        localStorage.setItem("darkTheme", "true");
        console.log("dark theme has not been set yet or is false. Has been set to true.");
    }
}

function enableTheme(x) {
    if (x == true) {
        var divs = document.querySelectorAll('.dark_comp');
        for (var i = 0; i < divs.length; i++) {
            // add dark_toggle to enable dark Theme.
            divs[i].classList.add('dark_toggle');
        }
        // store darkTheme = true value, since darkTheme is now enabled
    }
}

// switch is clicked:
function toggleTheme(x) {
    if (localStorage.getItem("darkTheme" ) == "true") {
        // darkTheme == true = darkTheme is on. User wants to disable darkTheme.
        var divs = document.querySelectorAll('.dark_comp');
        for (var i = 0; i < divs.length; i++) {
            // remove dark_toggle from all dark_comp elements.
            // Dark theme should be disabled now.
            divs[i].classList.remove('dark_toggle');
        }
        // store darkTheme = false value, since darkTheme is now disabled
        localStorage.setItem("darkTheme", "false");
        console.log("dark theme has been disabled");
    } else if (localStorage.getItem("darkTheme") == "false") {
        // else == dark theme is false. User wants to enable it.
        var divs = document.querySelectorAll('.dark_comp');
        for (var i = 0; i < divs.length; i++) {
            // add dark_toggle to enable dark Theme.
            divs[i].classList.add('dark_toggle');
        }
        // store darkTheme = true value, since darkTheme is now enabled
        localStorage.setItem("darkTheme", "true");
        console.log("dark theme has been enabled");
    }

}


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


function pop_up_trigger() {
    document.getElementById("email_confirm_popup").style.opacity = "1";
}


// Ways to implement a dark mode switch
// 1. Add a dark_toggle class to all elements
// 2. add a dark_comp class to elements that can switch to dark mode, 
// then get those elements and toggle dark-toggle on them
// 3. Google a more sensible solution
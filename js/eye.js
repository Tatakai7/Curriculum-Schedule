function Eye() {
    var x = document.getElementById("password");
    var y = document.getElementById("eye1");
    var z = document.getElementById("eye2");

    if (x.type === "password") {
        x.type = "text";
        z.style.display = "flex";
        y.style.display = "none";
    } else {
        x.type = "password";
        z.style.display = "none";
        y.style.display = "flex";
    }
}

function EyeLog() {
    var x = document.getElementById("password");
    var y = document.getElementById("eye1");
    var z = document.getElementById("eye2");

    if (x.type === "password") {
        x.type = "text";
        z.style.display = "flex";
        y.style.display = "none";
        x.style.margin = "0px";
        x.style.padding = "0px";
    } else {
        x.type = "password";
        z.style.display = "none";
        y.style.display = "flex";
    }
}

function EyeProf() {
    var x = document.getElementById("password");
    var y = document.getElementById("eye1");
    var z = document.getElementById("eye2");

    if (x.type === "password") {
        x.type = "text";
        x.style.margin = "0px";
        x.style.padding = "5px";
        z.style.display = "flex";
        y.style.display = "none";
    } else {
        x.type = "password";
        z.style.display = "none";
        y.style.display = "flex";
    }
}
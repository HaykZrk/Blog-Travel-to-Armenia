function msgConnectionError() {
    document.getElementById("connectionFail").style.visibility = "hidden";
    document.getElementById("emailIncorrect").style.backgroundColor = "white";
    document.getElementById("passwordIncorrect").style.backgroundColor = "white";
}

setTimeout("msgConnectionError()", 5000);
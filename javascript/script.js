function clkmenu(x) {
    x.classList.toggle("change");
    document.getElementById("nav").classList.toggle("show");
}

function open_chat(element) {
    element.classList.add("hide");
    document.getElementById("chat").classList.remove("closed");
    document.getElementById("chat").classList.remove("minimized");
}

function close_chat(){
    document.getElementById("chat_button").classList.remove("hide");
    document.getElementById("chat").classList.add("closed");
}

function minimize_chat(){
    document.getElementById("chat").classList.toggle("minimized");
}
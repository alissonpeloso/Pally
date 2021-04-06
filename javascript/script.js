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

function check_login() {
    const email = document.getElementById("email_login");
    const pass = document.getElementById("password_login");

    if(email.value == "" || pass.value == ""){
        alert("Os campos E-mail/Senha não podem ser vazios");
        return false;
    }

}

function check_register() {
    const name = document.getElementById("name_register");
    const email = document.getElementById("email_register");
    const birthday = document.getElementById("birthDate_register");
    const pass = document.getElementById("password_register");
    const confirm_pass = document.getElementById("confirm-password_register");
    const bairro = document.getElementById("bairro_register");
    const address = document.getElementById("address_register");

    if(name.value == ""){
        alert("O campo 'Nome Completo' não pode ser vazio");
        return false;
    }
    if(email.value == ""){
        alert("O campo 'E-mail' não pode ser vazio");
        return false;
    }
    if(birthday.value == ""){
        alert("O campo 'Data de Nascimento' não pode ser vazio");
        return false;
    }
    if(pass.value == ""){
        alert("O campo 'Senha' não pode ser vazio");
        return false;
    }
    if(confirm_pass.value == ""){
        alert("O campo 'Confirme sua senha' não pode ser vazio");
        return false;
    }
    if(bairro.value == ""){
        alert("O campo 'Bairro' não pode ser vazio");
        return false;
    }
    if(address.value == ""){
        alert("O campo 'Endereço' não pode ser vazio");
        return false;
    }
    if(pass.value != confirm_pass.value){
        alert("As senhas inseridas não conferem");
        return false;
    }
}

function check_message() {
    const name = document.getElementById("uname");
    const email = document.getElementById("umail");
    const subject = document.getElementById("usubject");
    const message = document.getElementById("umessage");

    if(name.value == ""){
        alert("O campo 'Nome' não pode ser vazio");
        return false;
    }
    if(email.value == ""){
        alert("O campo 'E-mail' não pode ser vazio");
        return false;
    }
    if(subject.value == ""){
        alert("O campo 'Assunto' não pode ser vazio");
        return false;
    }
    if(message.value == ""){
        alert("O campo 'Mensagem' não pode ser vazio");
        return false;
    }
}

var sizes = {
    'p': 1,
    'm': 2,
    'g': 4,
    'gg': 4,
}

function selectPizzaSize(){
    size = document.getElementById("size_pizza").value;
    if(size == ""){
        document.getElementById("order").style.display = "none";
        document.getElementById("flavorLimit").innerText = "0";
    }
    else{
        document.getElementById("order").style.display = "flex";
        document.getElementById("flavorLimit").innerText = sizes[size];
    }

    /* zerar todos os checkboxes */
    lista = document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < lista.length; i++)
        lista[i].checked = false;
    document.getElementById("flavorNum").innerText = 0;
}

function countFlavors() {
    count = 0;
    flavors = document.querySelectorAll("input[type=checkbox]");
    for (i = 0; i < flavors.length; i++)
        if(flavors[i].checked)   
            count++;    
    return count; 
}

function updateCount() {
    selected = countFlavors();
    size = document.getElementById("size_pizza").value;
    sizeValue = sizes[size];

    document.getElementById("flavorNum").innerText = selected;

    if(selected > sizeValue){
        alert("Você ultrapassou o número de sabores permitido");
    }
}

function addOrder() {
    size = document.getElementById("size_pizza").value;
    selected = countFlavors();
    
    if(selected > sizes[size]){
        alert("Você ultrapassou o número de sabores permitido");
        return false;
    }
    else{
        if(selected == 0){
            alert("Selecione pelo menos 1 sabor");
            return false;
        }
    }
}

function select_flavor(element) {
    if(element.id == "flavor_selected"){
        // element.id = "";
    }
    else{
        element.id = "flavor_selected";
    }
}
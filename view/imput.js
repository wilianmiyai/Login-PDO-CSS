function validar() {
    var nome = formuser.nome.value;
    var email = formuser.email.value;
    var telefone = formuser.telefone.value;
    var end = formuser.end.value;
    var cpf = formuser.cpf.value;

    if (nome == "" || nome.length <= 5) {
        alert("Informe o nome completo");
        formuser.nome.focus();
        return false;
    }
    if (email == "" || email.indexOf('@gmail.com') == -1){
        alert("Informe o email completo");
        formuser.email.focus();
        return false;
    }
    if (telefone === "" || telefone.length <= 14) {
        alert("Informe um numero de telefone correto");
        formuser.telefone.focus();
        return false;
    }
    if (end == "" || end.length <= 5) {
        alert("Informe o endereço completo");
        formuser.end.focus();
        return false;
    }
    if (cpf == "" || cpf.length <= 13) {
        alert("Informe o cpf correto");
        formuser.cpf.focus();
        return false;
    }
}



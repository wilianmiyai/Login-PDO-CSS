
function validar() {
    var nome = formuser.nome.value;
    var pass = formuser.pass.value;
    var email = formuser.email.value;

    if (nome == "" || nome.length <= 3) {
        alert("Informe o nome completo");
        formuser.nome.focus();
        return false;
    }
    if (pass == "" || pass.length <= 8) {
        alert("Informe uma senha forte");
        formuser.pass.focus();
        return false;
    }
    if (email == "" || email.indexOf('@gmail.com') == -1) {
        alert("Informe o email completo");
        formuser.email.focus();
        return false;
    }
}
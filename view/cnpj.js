
function mascaraCNPJ(i) {
    const v = i.value;

    if (isNaN(v[v.length - 1])) {
        // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "19");
    if (v.length == 2 || v.length == 6)
        i.value += ".";
    if (v.length == 11)
        i.value += "/";
    if (v.length == 16)
        i.value += "-";
}


function mascaraPhone(i) {
    const v = i.value;

    if (isNaN(v[v.length - 1])) {
        // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "15");
    if (v.length == 1)
        i.value = "(" + i.value;
    if (v.length == 3)
        i.value += ") ";
    if (v.length == 10)
        i.value += "-";
}

function mascara(i) {
    const v = i.value;

    if (isNaN(v[v.length - 1])) {
        // impede entrar outro caractere que não seja número
        i.value = v.substring(0, v.length - 1);
        return;
    }

    i.setAttribute("maxlength", "14");
    if (v.length == 3 || v.length == 7)
        i.value += ".";
    if (v.length == 11)
        i.value += "-";
}

function validar() {
    var nome = formuser.nome.value;
    var email = formuser.email.value;
    var telefone = formuser.telefone.value;
    var end = formuser.end.value;
    var cnpj = formuser.cnpj.value;
    var fantasia = formuser.fantasia.value;
    let n = fantasia.length;
    
    if (nome === "" || nome.length <= 5) {
        alert("Informe o nome completo");
        formuser.nome.focus(); 
        return false;
    }
    if (email === "" || email.indexOf('@gmail.com') == -1) {
        alert("Informe o email completo (@gmail.com)");
        formuser.email.focus();
        return false;
    }
    if (end === "" || end.length <= 5) {
        alert("Informe o endereço completo");
        formuser.end.focus();
        return false;
    }
    if (telefone === "" || telefone.length <= 14) {
        alert("Informe um numero de telefone correto");
        formuser.telefone.focus();
        return false;
    }
    if (cnpj === "" || cnpj.length <= 18) {
        alert("Informe o cnpj correto");
        formuser.cnpj.focus();
        return false;
    }
    if (fantasia === "" || n <= 10) {
        alert("Informe o Nome fantasia correto");
        formuser.fantasia.focus();
        return false;
    }
}

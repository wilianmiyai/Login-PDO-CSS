<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    
} else {

    header("location: login.php");
}

require_once '../controller/cPessoaJ.php';
$cadPessoa = new cPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="header e nav.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="Cad.css" media="screen"/>
    </head>
    <body>
        <header class="header-container">
            <nav class="top-nav">
                <h2 class="logo nav-color">Cadastro de Pessoa juridica</h2>
                <ul class="main-nav">
                    <li><a href="../index.php"" class="nav-item nav-color">Home</a></li>
                    <li><a href="cadUsuario.php"" class="nav-item nav-color">Cadastro de Usuário</a></li>
                    <li><a href="cadPessoaJ.php" class="nav-item nav-color">Cadastro de Pessoa Juridica</a></li>
                    <li><a href="cadPessoaF.php" class="nav-item nav-color">Cadastro de Pessoa Física</a></li>
                </ul>
                <div class="nav-right">
                    <a href="../controller/cLogout.php" class="btn">Sair</a>
                    <i class="ion-navicon-round menu-icon icon nav-color" id="nav_bar"></i>
                    <i class="ion-close-round close-icon icon nav-color"></i>
                </div>
            </nav>
        </header>
        <div id="formContainer">
            <form action="<?php $cadPessoa->inserir(); ?>" method="Post" name="formuser">
                <div class="formItem">
                    <label>Nome:</label>
                    <input placeholder="Nome aqui..." type="text" required  x-moz-errormessage="Ops.
                           Não esqueça de preencher este campo." name="nome" id="nome"/>
                    <div class="formError">
                        Preencha seu nome.
                    </div> 
                </div>
                <div class="formItem">
                    <label>Telefone:</label>
                    <input placeholder="Seu numero de telefone"  pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="Digite um numero de telefone no formato: (11) 11111-1111 type="text" oninput="mascaraPhone(this)" required name="telefone" id="telefone" />
                    <div class="formError">
                        Preencha seu telefone.
                    </div> 
                </div>
                <div class="formItem">
                    <label>Email:</label>
                    <input placeholder="Seu email" type="email" required name="email" id="email" />
                    <div class="formError">
                        Preencha seu E-mail.
                    </div> 
                </div>
                <div class="formItem">
                    <label>Endereço:</label>
                    <input placeholder="Seu endereço" type="text" required name="end" id="end" />
                    <div class="formError">
                        Preencha seu Endereço.
                    </div> 
                </div>
                <input type="radio" name="sexo" required value="F"/>Feminino
                <input type="radio" name="sexo" required value="M"/>Masculino
                <div class="formItem">
                    <label>CNPJ:</label>
                    <input oninput="mascaraCNPJ(this)" pattern="\d{2}\.\d{3}\.\d{4}/\d{4}-\d{2}" title=" Digite o cnpj no formato: 11.111.1111/1111-11" type="text" name="cnpj" placeholder="Digite seu CNPJ" inputmode="numeric"  placeholder="Seu CNPJ" required id="cnpj" />
                    <div class="formError">
                        Preencha seu CNPJ.
                    </div> 
                </div>
                <div class="formItem">
                    <label>Nome Fantasia:</label>
                    <input placeholder="Nome fantasia" type="text" required  name="fantasia" id="fantasia" />
                    <div class="formError">
                        Preencha seu nome fantasia.
                    </div>
                </div>
                <input type="submit" onclick="return validar()" value="Salvar" name="salvarBD" />
                <input type="submit" value="Limpar" name="limpar" />
                <input type="submit" value="Cancelar" onclick="location.href = '../index.php'"/>
                <br>
                <input type="submit" value="Listar Pessoas" onclick="location.href = 'listarPessoaJ.php'"/>
            </form>
            <script src="cnpj.js"></script>
            <script src="mascaras.js"></script>
    </body>
</html>

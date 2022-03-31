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
$pessoaF = null;
require_once '../controller/cPessoaJ.php';
$cadPessoa = new cPessoaJ();
if (isset($_POST['update'])) {
    $pessoaF = $cadPessoa->getPessoaFById($_POST['id']);
}
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
                <h2 class="logo nav-color">Editar Pessoa Juridica</h2>
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
            <form action="../controller/updatePessoaJ.php" method="Post" name="formuser">
                <input type="hidden" name="idPessoa" value="<?php echo $pessoaF[0]['idPessoa']; ?>"/>
                <label>Nome:</label>
                <div class="formItem">               
                    <input value="<?php echo $pessoaF[0]['nome']; ?>" type="text" required name="nome" id="nome"/>
                    <div class="formError">
                        Preencha seu nome.
                    </div> 
                </div>
                <label>Telefone:</label>
                <div class="formItem">
                    <input value="<?php echo $pessoaF[0]['telefone']; ?>" placeholder="Seu numero de telefone"  pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$" title="Digite um numero de telefone no formato: (11) 11111-1111" type="text" oninput="mascaraPhone(this)" required name="telefone" id="telefone" />
                    <div class="formError">
                        Preencha seu telefone.
                    </div> 
                </div>
                <label>Email:</label>
                <div class="formItem">
                    <input value="<?php echo $pessoaF[0]['email']; ?>" type="email" required name="email" id="email" />
                    <div class="formError">
                        Preencha seu e-mail.
                    </div> 
                </div>
                <label>Endereço:</label>
                <div class="formItem">
                    <input value="<?php echo $pessoaF[0]['endereco']; ?>" type="text" required name="end" id="end" />
                    <div class="formError">
                        Preencha seu endereço.
                    </div> 
                </div>
                <br>
                <input type="radio" <?php
                if ($pessoaF[0]['sexo'] == "F") {
                    echo "checked";
                }
                ?> name="sexo" value="F"/>Feminino
                <input type="radio" <?php
                if ($pessoaF[0]['sexo'] == "M") {
                    echo "checked";
                }
                ?> name="sexo" value="M"/>Masculino
                <br>
                <br>
                <label>CNPJ:</label>
                <div class="formItem">
                    <input value="<?php echo $pessoaF[0]['cnpj']; ?>" oninput="mascaraCNPJ(this)" type="text" name="cnpj" pattern="\d{2}\.\d{3}\.\d{4}/\d{4}-\d{2}" title=" Digite o cnpj no formato: 11.111.1111/1111-11" placeholder="Digite seu CNPJ" inputmode="numeric"  placeholder="Seu CNPJ" required id="cnpj" />
                    <div class="formError">
                        Preencha seu CNPJ.
                    </div> 
                </div>
                <label>Nome Fantasia:</label>
                <div class="formItem">
                    <input value="<?php echo $pessoaF[0]['nomeFantasia']; ?>" type="text" required name="fantasia" id="fantasia" />
                    <div class="formError">
                        Preencha seu nome fantasia.
                    </div> 
                </div>
                <br>
                <input type="submit" onclick="return validar()" value="Salvar" name="updatePJ" />
                <input type="submit" value="Cancelar" name="cancelarUP" />
            </form>
        </div>
        <script src="cnpj.js"></script>
        <script src="mascaras.js"></script>
    </body>
</html>

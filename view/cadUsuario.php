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

require_once '../controller/cUsuario.php';
$cadUser = new cUsuario();
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
                <h2 class="logo nav-color">Cadastro de Usuario</h2>
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
            <form action="<?php $cadUser->inserir(); ?>" method="POST" name="formuser">
                <div class="formItem">
                    <input type="text" name="nome" required placeholder="Nome aqui" id="name"/>
                    <div class="formError">
                        Preencha seu nome.
                    </div> 
                </div>
                <div class="formItem">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" required placeholder="Email aqui" id="Email"/>
                    <div class="formError">
                        Preencha seu e-mail.
                    </div> 
                </div>
                <div class="formItem">
                    <label for="password">Senha</label>
                    <input type="password" name="pass" required placeholder="Senha aqui" id="password"/>
                    <div class="formError">
                        Senha errada.
                    </div> 
                </div>
                <input type="submit" onclick="return validar()" name="salvar" value="Salvar" id="submit"/>
                <br>
                <input type="submit" value="Limpar" name="limpar" />
                <br>
                <input type="submit" value="Cancelar" onclick="location.href = '../index.php'"/>
                <br>
                <input type="submit" value="Listar Users" onclick="location.href = 'listaUsuarios.php'"/>
            </form>
        </div>
        <script src="user.js"></script>
    </body>
</html>

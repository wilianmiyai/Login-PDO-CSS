<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<?php
session_start();
if (isset($_SESSION['logadoT']) && $_SESSION['logadoT'] == true) {
    
} else {

    header("location: view/login.php");
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Criptos</title>
        <meta name="autor" content="Wilian Miyai"/>
        <meta name="keywords"content="html, WilianMiyai, senac tech, TI,
              Desenvolvimento"/>
        <link rel="stylesheet" type="text/css" href="index.css" media="screen"/>
    </head>
    <body>
        <header class="header-container">
            <nav class="top-nav">
                <h2 class="logo nav-color">Bem vindo</h2>
                <ul class="main-nav">
                    <li><a href="index.php"" class="nav-item nav-color">Home</a></li>
                    <li><a href="view/cadUsuario.php"" class="nav-item nav-color">Cadastro de Usuário</a></li>
                    <li><a href="view/cadPessoaJ.php" class="nav-item nav-color">Cadastro de Pessoa Juridica</a></li>
                    <li><a href="view/cadPessoaF.php" class="nav-item nav-color">Cadastro de Pessoa Física</a></li>
                </ul>
                <div class="nav-right">
                    <a href="controller/cLogout.php" class="btn">Sair</a>
                    <i class="ion-navicon-round menu-icon icon nav-color" id="nav_bar"></i>
                    <i class="ion-close-round close-icon icon nav-color"></i>
                </div>
            </nav>
        </header>
        <script src="js.js"></script>
    </body>
</html>

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
$Users = null;
if (isset($_POST['update'])) {
    $Users = $cadUser->getPessoaFById($_POST['id']);
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
                <h2 class="logo nav-color">Editar Usuario</h2>
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
            <form action="../controller/updateUser.php" method="Post" name="formuser">
                <input type="hidden" name="idUser" value="<?php echo $Users[0]['idUser']; ?>"/>
                <label>Nome:</label>
                <div class="formItem">
                    <input value="<?php echo $Users[0]['nome']; ?>" type="text" name="nome" id="nome"/>
                    <div class="formError">
                        Preencha seu nome.
                    </div> 
                </div>
                <label>Email:</label>
                <div class="formItem">
                    <input value="<?php echo $Users[0]['email']; ?>" type="email" name="email" id="email" />
                    <div class="formError">
                        Preencha seu e-mail.
                    </div> 
                </div>
                <br>
                <input type="submit" onclick="return validar()" value="Salvar" name="Update" />
            </form>
        </div>
        <script src="user.js"></script>
    </body>
</html>

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
$listaPessoaJ = $cadPessoa->getPessoaJ();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="Lista.css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="header e nav.css" media="screen"/>
    </head>
    <body>
        <header class="header-container">
            <nav class="top-nav">
                <h2 class="logo nav-color">Lista de Pessoa Juridica</h2>
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
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>id</th><th>Nome</th><th>E-mail</th><th>CNPJ</th><th>Função</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listaPessoaJ as $pessoa): ?>
                    <tr class="show-table">
                        <td><?php echo $pessoa['idPessoa']; ?></td>
                        <td class="company-name"><?php echo $pessoa ['nome']; ?></td>
                        <td><?php echo $pessoa ['email']; ?></td>
                        <td><?php echo $pessoa ['cnpj']; ?></td>
                        <td class="remove-item">
                            <form action="editarPessoaJ.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pessoa["idPessoa"]; ?>"/>
                                <input type="submit" name="update" value="Editar" style="
                                       float: left;
                                       "/>
                            </form>
                            <form action="../controller/deletarPessoaJ.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $pessoa["idPessoa"]; ?>"/>
                                <input type="submit" name="delete" value="deletar" style="
                                       float: left;
                                       "/>
                                <button type="button" onclick="location.href = 'cadPessoaJ.php' style ="
                                        float: left;
                                        "">Voltar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <script src="../js.js"></script>
    </body>
</html>

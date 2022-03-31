<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<?php
require_once '../controller/cLogin.php';
$login = new cLogin();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" type="text/css" href="../estilo.css"/>
    </head>
    <body>
        <form action="<?php $login->login(); ?>" method="POST">
            <div class="container on">
                <div class="screen">
                    <h3 class="title">
                        Conexão estabelecida
                    </h3>
                    <div class="box--outer">
                        <div class="box">
                            <div class="box--inner">
                                <div class="content">
                                    <div class="holder">
                                        <b>Bem vindo</b>
                                        <br>
                                        <br>
                                        <div class="row">
                                            <div class="col col__left label">
                                                E-mail
                                            </div>
                                            <div class="col col__center">
                                                <input type="email" name="email" id="login" maxlength="32" required placeholder="Email aqui"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col col__left label">
                                                Senha
                                            </div>
                                            <div class="col col__center">
                                                <input type="password" name="pass" id="password" required placeholder="Senha aqui" data-error="" maxlength="32" autocomplete="new-password" autofocus="true"/>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button type="submit" id="submit" name="logar"  value="Logar">Entrar</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <?php
        ?>
    </body>
</html>

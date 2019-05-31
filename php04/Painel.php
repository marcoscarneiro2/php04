<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Painel</title>
</head>
<?php
   
    include_once 'validar.php';
    ?>   

<body>
   <h2 style="color:red">
    <?php

    echo"Seja bem vindo,".$_SESSION["login"];
    

    ?>
    </h2>
    <br><br>
    <h3>Menu</h3>
    
    <?php 
            if($_SESSION['perfil'] == 'admin'){ 
            ?>
    <a href="cadastrar.php">Cadastrar Usuário</a>
    <?php }
            ?>
    
    <br>
    <a href="consultar.php">Consultar Usuário</a>
    <br>
    <a href="alterarSenha">Alterar Senha</a>
    <br>
    <a href="sair.php">Sair</a>
</body>
</html>
<?php
$login = $_POST["login"];
$senha = md5($_POST["senha"]);

session_start();

include_once 'conexao.php';

$sql= "select * from usuarios where login='".$login."' and senha='".$senha."' ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1){
    //echo "logado";
    $row = mysqli_fetch_array($result);
    $_SESSION["login"] = $row["login"];
    $_SESSION["perfil"] = $row["perfil"];
    $msg2 = "$login";
    header("Location:Painel.php?id=".$msg2);
    
}else{
    $msg = "Login/Senha invalido";
    header("Location:index.php?id=".$msg);
}
?>
<?php
$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql= "select * from usuario where login='".$login."' and senha='".$senha."' ";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result) == 1){
    echo "logado";
}else{
    echo "ERRO!";
}
?>
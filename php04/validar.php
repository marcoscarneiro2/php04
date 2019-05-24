<?php
session_start();
if(!$_SESSION["login"]){
    session_destroy();
    $msg = "Usuário sem acesso";
    header("Location:index.php?id=".$msg);
}
?>
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
if(isset($_GET["id"])){
   $msg2 = $_GET["id"];
    echo"Bem vindo, $msg2";
    
}
    ?>
    </h2>
</body>
</html>
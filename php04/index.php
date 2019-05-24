<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <?php
if(isset($_GET["id"])){
   echo $_GET["id"];
}
    
    ?>
   <br><br><br><br><br><br><br><br>
    <form action="verificarlogin.php" method="post" class="container col-4" style="background:white;height:360px;width:400px;border-radius:20%">
    <br><br>
   <h2 style="color:red">Área Restrito</h2>
        <label style="color:red" for="login">Login</label>
        <input style="color:red;background:#bebcbc" type="text" name="login" id="login" class="form-control">
        <br>
        <label style="color:red" for="senha">Senha</label>
        <input style="color:red;background:#bebcbc" type="password" name="senha" id="senha" class="form-control">
        <br>
        <input style="background-color:red" type="submit" value="entrar" class="btn btn-dark container col-2">
    </form>
   
</body>
</html>
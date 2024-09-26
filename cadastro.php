<?php 
require 'config.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="config.css">
</head>
<body>
    
<form action="inserir.php" method="post">

    <h1>Login</h1>
<label>User</label><br>
<input type="text" placeholder="Nome" name="nome" require><br><br>  
<label>Email</label><br>
<input type="email" placeholder="Email" name="email" require><br>
<input type="submit"  value="Cadastrar" class="btn" require>

</form>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="config.css">
</head>
<body>
    <main>

  
<?php 

require 'config.php';

try { $User = $_POST['nome'];
$Email = $_POST['email'];

$sql = $pdo -> prepare ("INSERT INTO usuario (nome, email) VALUES (:nome, :email)");
$sql ->bindvalue(':nome',$User);
$sql ->bindvalue(':email',$Email);

$sql -> execute();

echo "Usuário cadastrado";
}

catch (Exception $e){
    echo "ERROR 404";
}
?>

</main>
</body>
</html>
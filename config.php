
<?php


  try {
    $pdo = new PDO("mysql:host=localhost;port=3306;dbname=test", "root", "cimatec"); }
    catch (Exception $e) {
        echo "Error ao conectar".$e->getMassage()."\n";

    }


?>



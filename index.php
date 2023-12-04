<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Entrerpise POO</h1>
    <?php


        spl_autoload_register(function($class_name){ 
            require $class_name . '.php';
        });

        $elanformation = new Entreprise("ELAN FORMATION", "1993-01-01", "14 rue de Rhône", "67100", "Strasbourg");

        echo $elanformation->afficherInfos();

        // POO_Partie1 times : 
    ?>
</body>
</html>



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
        $tf1 = new Entreprise("TF1", "2000-01-01", "13 rue de Seine", "75000", "PARIS");
        
        
        $employe = new Employe("SMAIL","Stéphane","stephane@elan-formation.fr", $elanformation);
        $employe1 = new Employe("GRAU","Mickael","mickael@elan-formation.fr", $elanformation);
        
       
       

        echo $elanformation->afficherEmployer();

    ?>
</body>
</html>
 


<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include("../iniciar_sessio/userLogin.php");
$dataUser[]= unserialize(urldecode($_GET['dataUser'])) ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació usuari</title>
</head>
<body>
    <h1>INFORMACIÓ USUARI</h1>
    <?php
        //
        foreach ( $dataUser as $user){
            echo "ID usuari: ". $user["id"]."\n <br>";
            echo "Nom usuari: " . $user["name"]."\n <br>";
            echo "Cognom usuari: " . $user["surname"]."\n <br>";
            echo "Rol usuari: " . $user["rol"]."\n <br>";
        }
    ?>
    <a href=""></a>
</body>
</html>
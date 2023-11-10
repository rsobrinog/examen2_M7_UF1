<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include('../iniciar_sessio/userLogin.php');

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
        //Obtenim i mostrem les dades del usuari 
        $user = $response->fetch_assoc();

        foreach ($user as $usuari){
            echo "ID usuari: ".$usuari['id'];
            echo "Nom usuari: ".$usuari['name'];
            echo "Cognom usuari: ".$usuari['surname'];
            echo "Rol usuari: ".$usuari['rol'];
        }
    ?>
</body>
</html>
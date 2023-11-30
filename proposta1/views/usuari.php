<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php donde hara primero el procedimiento de ese fichero
include('../iniciar_sessio/userLogin.php');
echo "entra usuari.php";
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
        include('../iniciar_sessio/userLogin.php');
        //ERROR: les dades d'una BBDD s'extreuen amb foreach. Si tens més d'un registre, com ho tens ara no es veurien tots esl registres.
        if($data) {
            echo "ID usuari: ".$data['id'] ;
            echo "Nom usuari: " .$data['name'] ;
            echo "Cognom usuari: " .$data['surname'] ;
            echo "Rol usuari: " .$data['rol'] ;
        }
        mysqli_close($connexion);
    ?>
</body>
</html>
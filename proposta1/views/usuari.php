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
    echo "ID usuari: " . $user['id'] . "<br>";
    echo "Nom usuari: " . $user['name'] . "<br>";
    echo "Cognom usuari: " . $user['surname'] . "<br>";
    echo "Rol usuari: " . $user['rol'] . "<br>";
    ?>
</body>

</html>
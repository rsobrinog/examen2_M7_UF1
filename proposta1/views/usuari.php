<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
//ERROR: no troba l'arxiu. Aquest path és si està en el mateix directori
include("userLogin.php");

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
    // Asumiendo que $response es el resultado de la consulta
    //ERROR: S'han de posar tots els camps de l'usuari a mostrar.
    foreach ($response as $row) {
        echo "ID usuari: " . $row['id']; // Reemplaza 'id' con el nombre real del campo
        echo "Nom usuari: " . $row['name'];
        echo "Cognom usuari: " . $row['surname'];
        echo "Rol usuari: " . $row['rol'];
    }
    ?>
</body>

</html>
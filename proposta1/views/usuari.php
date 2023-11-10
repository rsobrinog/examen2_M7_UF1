<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
// aqui no hago el include porque lo hago en userLogin.php
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
        foreach ($rows as $row){
            echo "ID usuari: ". $row['id'];
            echo "Nom usuari: " . $row['name'];
            echo "Cognom usuari: " . $row['surname'];
            echo "Rol usuari: " . $row['rol'];
        }
    ?>
</body>
</html>
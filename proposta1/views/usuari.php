<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include("../iniciar_sessio/userLogin.php");
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

        //Comprobació per si no existeix l'usuari amb les dades introduïdes al login
        if ($result -> num_rows == 0) {
            echo "Aquest usuari no existeix";
        } else {

            // Bucle que mostra la info dels usuaris que hem rebut de la consulta
            foreach ($dades as $user){
                echo "ID usuari: ". $user["id"]."<br>";
                echo "Nom usuari: " . $user["name"]."<br>";
                echo "Cognom usuari: " . $user["surname"]."<br>";
                echo "Rol usuari: " . $user["rol"]."<br>";
                echo "Contrasenya usuari: " . $user["password"]."<br>";
                echo "Email usuari: " . $user["email"]."<br>";
                echo "Actiu: " . $user["active"]."<br>";
            }
        }
    ?>
</body>
</html>
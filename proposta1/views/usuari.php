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
        //obtenir les dades del array
        foreach ($datosUsuari as $usuari){
            echo "<b>ID usuari: </b>". $usuari['id']."<br>";
            echo "<b>Nom</b> usuari: </b>" . $usuari['name']."<br>";
            echo "<b>Cognom usuari: </b>" . $usuari['surname']."<br>";
            echo "<b>Rol usuari: </b>" . $usuari['rol']."<br>";
            echo "<b>Password usuari: </b>" . $usuari['password']."<br>";
            echo "<b>Email usuari: </b>" . $usuari['email']."<br>";
            echo "<b>Active usuari: </b>". $usuari['active']."<br>";
        }
    ?>
    <br>
    <a href="login.html">Tornar a Login</a><br>
    <a href="index.html">Tornar a Registrar</a><br>
</body>
</html>
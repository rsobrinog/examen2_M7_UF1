<?php
    /*
    En aquest arxiu cal afegir per a que connecti amb la BBDD.
        - Dades BBDD:
            * Nom BBDD: users
            * Nom taula: user
            * Usuari: root
            * Contrasenya: 
            * host: localhost
        - La connexió pot ser procedimental o objectes (mysqli o PDO). Pero si es barreja, 
          per molt que funcioni serà errònia.
        - Verificació de conexió try-catch
    */

    //Assignació dades BBDD
    $db_host = "localhost";
    $db_user = "aki";
    $db_passwd = "Aki1234!";
    $db_name = "Users";

    //Connexió dintre de try-catch
    try{
        $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);
        //Si hay un error
        //ERROR: El try-catch ya es para detectar errores en la conexión a la bbdd. No és correcto el if dentro del try si ya tienes el catch.
        if ($conn->connect_error) {
            throw new Exception("Error de conexión a la base de datos: " . $conn->connect_error);
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

?>
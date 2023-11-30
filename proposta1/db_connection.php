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
    $db_user = "root";
    $db_passwd = "";
    $db_name = "users";

    //Connexió dintre de try-catch
    try {
        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
        //ERROR: la connexió és procedimental, per tant, la detecció d'errors ha de ser procedimental i no és així. Exception correspon a detecció d'errors en objectes
    } catch (Exception $e) {
        echo ("Error de connexió". $e->getMessage());
    }
?>
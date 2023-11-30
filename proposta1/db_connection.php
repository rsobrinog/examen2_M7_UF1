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
    //ERROR: Utilitzes una connexió procedimental i l'error Exception correspon a detectar errors en connexions d'objectes (PDO o new mysqli)
    //ERROR: Dintre del catch no tens cap error indicat
    try {
        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    } catch (Exception $e) {
        
    }

?>
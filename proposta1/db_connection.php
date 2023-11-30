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
    $db_host = "localhost:4306";
    $db_user = "root";
    $db_passwd = "";
    $db_name = "Users";

    //Connexió dintre de try-catch
    try {
        $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);
        //ERROR: Amb try-catch ja es detecten els errors de connexió, per tant, el if per detectar error de connexió no és vàlid
        if ($conn->connect_error) {
            throw new Exception("". $conn->connect_error);
        }
    } catch (Exception $e) {
        echo "". $e->getMessage();
    }        

?>
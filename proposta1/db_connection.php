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
    $db_host = "127.0.0.1";
    $db_user = "root";
    $db_passwd = "";
    $db_name = "Users";

    //Connexió dintre de try-catch
    try {
        $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    } catch (){
        //
    }
?>
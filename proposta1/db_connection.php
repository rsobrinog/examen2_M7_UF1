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
    $db_user = "veronica";
    $db_passwd = "pirineus";
    $db_name = "users";

    //Connexió dintre de try-catch

    try {
        $conection = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
        //ERROR: si fas la connexió procedimental, l'error ha de ser procedimental. Excpetion és error per PDO o new mysqly
    } catch (Exception $e) {
        echo"". $e->getMessage() ."";
    }
        

?>
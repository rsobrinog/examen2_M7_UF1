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
    $db_host = "localhost";//añadido localhost para la conexion
    $db_user = "root";
    $db_passwd = "";
    $db_name = "user";

    //Connexió dintre de try-catch
    try{
        $conn=new mysqli($db_host, $db_user, $db_passwd, $db_name);
        //ERROR: es Exception i no Exeption.
    }catch (Exeption $e){
        echo "error de conexion";
    }
?>
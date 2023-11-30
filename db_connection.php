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
        $conn = mysqli_connect($db_host, $db_user,$db_passwd,$db_name);
        //ERROR: si fas servir una connexió procedimental, Exception és per a objectes (PDO o new mysqli)
        //suberror: el try-catch ja és per agafar errors de connexió, el if no és necessari. Ho estas comprovant dues vegades.
        if(!$conn) {
            die("Error, no s-ha pogut connectar");
        }
    } catch (Exception $e) {
        echo "Error $e";
    }
        

?>
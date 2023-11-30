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
//Error linia 26. Si utilitzes connexió procedimental de mysqli no pots utilitzar Exception que és un error de mysqli (objectes) o PDO
} catch (Exception $e) {
    echo "Error de connexió: " . $e->getMessage();
}





?>
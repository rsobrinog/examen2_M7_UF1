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
$db_name = "Users";

try {
    $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);
    //ERROR: la conenxió que utilitzes amb la BBDD es procedimental, per tant s'ha d'utilitzar una detecció d'errors procedimental. En canvi, Exception és detecció
    //d'errors en objectes
} catch (Exception $e) {
    die("Erro: " . $e->getMessage() . "");
}

//Connexió dintre de try-catch


?>
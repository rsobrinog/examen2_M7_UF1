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

// Assignació dades BBDD
$db_host = "localhost";
$db_user = "root";
$db_passwd = "";
$db_name = "m7_database"; // La meva base de dades és m7_database

// Connexió dintre de try-catch
try {
    // Crear una connexió a la base de dades
    $conn = new mysqli($db_host, $db_user, $db_passwd, $db_name);

    // Verificar si la connexió ha sigut exitosa
    //ERROR: try-catch serveix per detectar tots els errors de connexió. Aquest If és incorrecte. Si vols algun missatge en concret, el poses dintre del catch.
    if ($conn->connect_error) {
        throw new Exception("Connexió a la base de dades fallida: " . $conn->connect_error);
    }

    echo "Connexió a la base de dades exitosa";

} catch (Exception $e) {
    // Capturar qualsevol excepció i mostrar un missatge d'error
    echo "Error: " . $e->getMessage();
}
?>

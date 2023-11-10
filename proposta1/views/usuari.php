<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include("../iniciar_sessio/userLogin.php"); // fem include d'userLogin.php per fer servir les variables
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació usuari</title>
</head>
<body>
    <?php
    // faig un fetch per transformar en array i si és null, la consulta no ha retornat res
        $result = $response->fetch_all(MYSQLI_ASSOC);
        if ($result!=null) { 
            foreach ($response as $data){
                echo "<h1>INFORMACIÓ USUARI</h1>";
                echo "ID usuari: ". $data['id']."<br>";
                echo "Nom usuari: " . $data['name']."<br>";
                echo "Cognom usuari: " . $data['surname']."<br>";
                echo "Rol usuari: " . $data['rol']."<br>";
            }
        } else {
            include("login.html");
            echo "login incorrecte";
        }
    ?>
</body>
</html>
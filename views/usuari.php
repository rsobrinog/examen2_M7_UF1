<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include("../db_connection.php");
include("../iniciar_sessio/userLogin.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informació usuari</title>
</head>
<body>
    <h1>INFORMACIÓ USUARI</h1>
    <?php
    $correo = $_POST['email'];
    $query = "SELECT * FROM user WHERE email = '$correo'";
    $results = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($response);

        //Hago un for each para mostrar a todos los de la DDBB
        foreach ($results as $resultado){
            echo "ID usuari: ". $row['id'];
            echo "Nom usuari: " . $row['name'] ;
            echo "Cognom usuari: " . $row['surname'];
            echo "Rol usuari: " . $row['rol'];
        }
    ?>
</body>
</html>
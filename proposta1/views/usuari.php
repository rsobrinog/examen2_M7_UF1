<?php
/*
------------------------------------ EXERCICI EXAMEN ----------------------------------
En aquest arxiu s'hi mostraran TOTES les dades de l'usuari (independentment del Rol)
---------------------------------------------------------------------------------------
*/

//incluir userLogin.php
include('../iniciar_sessio/userLogin.php');
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
    //Obté l'email que envio desde el login.
    $email = $_GET['email'];
    //Faig la query
    $consulta = "SELECT * FROM user WHERE email = '$email'";
    //Comprovo la connexió i la consulta.
    $result = mysqli_query($conn, $consulta);

    //Verifico que hi ha la informació del usuari.
    if (mysqli_num_rows($result) > 0) {
        //Faig un foreach que mostra la informacio per cada usuari.
        foreach ($result as $row) {
            echo "ID usuari: " . $row['id'] . "<br>";
            echo "Nom usuari: " . $row['name'] . "<br>";
            echo "Cognom usuari: " . $row['surname'] . "<br>";
            echo "Rol usuari: " . $row['rol'] . "<br>";
            echo  "<br>";
        }
    }
    ?>
</body>

</html>
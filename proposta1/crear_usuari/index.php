<?php

/*
--------------------------------------  EXERCICI EXAMEN ---------------------------------------
En aquest arxiu es proposa un codi per connectar a una BBDD de XAMPP segons els camps entrats pel
formulari (views/index.html).

1. Fer la trucada a la connexió a la BBDD
2. Crear la consulta per inserir usuari nou
3. Enviar la query
4. Enviar missatge d'error si la query és incorrecta.
5. Redirigir a usuari.php


Cal completar codi i/o trobar errors del codi següent.
Sota dels comentaris (//comentari) cal posar codi.
Cal posar comentari significatiu allà on posi "Posar comentari"

------------------------------------------------------------------------------------------------
*/



// Incluir l'arxiu de conexxió (db_connection.php)
include('../db_connection.php');

// Tinc el id que incrementa
// Comprova que el formulari de inici no estigui buit.
if (isset($_POST['send'])) {
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = isset($_POST['active']) ? 1 : 0;



    //Es crea la consulta per inserir les dades del formulari index.html.
    $consulta = "INSERT INTO user (rol, name, surname, password, email, active) VALUES ('$rol', '$name', '$surname', '$password', '$email', '$active')";

    //Comprova si conecta y es fa la consulta a la base de dades.
    $result = mysqli_query($conn, $consulta);
    //Si la connexió a la base de dades no es correcte, fa un die.
    if (!$result) {
        die("Query no insertada!");
    }

    header("Location: ../views/login.html");
    exit;
}

?>
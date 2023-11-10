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
include("db_connection.php");

// Posar comentari
if (isset($_POST['send'])) {
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $rol = $_POST['rol'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $status = isset($_POST['status']) ? 1 : 0;

    echo  `$nom, $cognom, $rol, $pass, $email, $status`;

    // Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO users (rol, name, surname, password, email, active) 
                 VALUES ('$rol', '$nom', '$cognom', '$pass', '$email', '$status')";
    
    // Posar comentari
    // resultat de la query
    $result = mysqli_query($conn, $consulta);
    
    // en cas de retornar error
    if (!$result) {
        die("Query fail: " . mysqli_error($conn)); // Enviar missatge d'error amb informació detallada
    }

    header("Location: views/usuari.php"); // Posar la ruta correcta si és diferent
    exit;
}
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
include('db_connection.php');



// Posar comentari
// Si el botó send ha sigut enviat llavors agafem les dades a traves del metode POST
if (isset($_POST['send'])) { // Canvi de 'set' a 'isset'
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = isset($_POST["active"]) ? 1 : 0;


    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO user (rol, name, surname, password, email, active) VALUES ('$rol_user', '$nom', '$cognom', '$pass', '$email', '$actiu')";




    //Posar comentari
    // Executem la nostra consulta utilitzant mysqli 
    $result = mysqli_query($conn, $consulta);

    // Comprovar si s'ha pogut afegir l'usuari
    if ($result) {
        // Si hem afegit l'usuari redirigir a la pàgina 
        header("Location: ../views/usuari.php");
        exit;
    } else {
        // Si no hem pogut afegir l'usuari, mostrar un missatge d'error més detallat
        die("Error en la consulta: " . mysqli_error($conn));
    }
}

?>
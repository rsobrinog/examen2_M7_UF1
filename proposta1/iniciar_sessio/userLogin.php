<?php
/*
--------------------------------- EXERCICI EXAMEN -----------------------------------------
Cal completar i/o trobar errors per a que aquest arxiu pugui:
 - Connectar-se a la BBDD
 - Crear la consulta per buscar usuari a través de les dades passades per formulari (views/login.html)
 - Enviar la consulta per a retornar un objecte amb dades (si existeix)
 - Adaptar la verificació de la consulta $response.
 - Direccionament a la view corresponent
-------------------------------------------------------------------------------------------
*/


// Incluir l'arxiu de conexxió (db_connection.php)
include("../db_connection.php");

if (isset($_POST["signin"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];


    //Consulta la BBDD per buscar usuari segons email i password
    $sql = "SELECT * FROM user WHERE email = '$email' AND password = '$passwd'";


    //Posar comantari
    // Executar la consulta a la base de dades amb mysqli_query
    $response = mysqli_query($conn, $sql);

    // Comprovar si la consulta té èxit

    if (!$response) {
        echo "Hi ha un error en la consulta";
    } else {
        echo "consulta correcte";

    }

    //Direccionament a la view usuari.php
    header("Location: ../views/usuari.php");


} else {
    echo "Hi ha hagut algun error";
    mysqli_error($conn);
}
?>
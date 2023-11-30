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
//ERROR: no troba l'arxiu. Aquest path és si està en el mateix directori
include("db_connection.php");

if (isset($_POST['signin'])) {
    $email = $_POST['email'];
    $passwd = $_POST['password'];

    //Consulta la BBDD per buscar usuari segons email i password
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$passwd'";

    //Posar comentari
    //ERROR: Falta comentari
    //ERROR si fas una connexió no procedimental, la consulta ha de ser no procedimental (mysqli->query)
    $response = mysqli_query($conn, $sql);

    if (!$response) {
        echo "Hi ha un error en la consulta: " . mysqli_error($conn);
    } else {
        echo "Consulta correcta";
        //Direccionament a la view usuari.php
        header("Location: ../views/usuari.php"); // Ajustar la ruta si es necesaria
        exit;
    }
} else {
    echo "Hi ha hagut algun error";
    echo mysqli_error($conn); // Agregué 'echo' para mostrar el mensaje de error
}

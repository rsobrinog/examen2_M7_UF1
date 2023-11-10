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


// Incluir l'arxiu de conexxió (db_connection.php).
include('../db_connection.php');

//Comprova si la informació del login no es buit.
if (isset($_POST['signin'])) {
    $email = $_POST['new_email'];
    $passwd = $_POST['new_password'];


    //Consulta la BBDD per buscar usuari segons email i password.
    $sql = "SELECT * FROM user WHERE email = '$email' AND password ='$passwd'";


    //Comprova si la conexio y la query es fan correctament.
    $response = mysqli_query($conn, $sql);

    //Comprova que la connexio a la base de dades y la query siguin correctes.
    if (!$response) {
        die("Hi ha un error en la consulta: " . mysqli_error($conn));
    } else {
        // Comprova si s'ha trobat algun usuari amb les credencials proporcionades.
        if (mysqli_num_rows($response) > 0) {
            // Direccionament a la view usuari.php.
            header('Location: ../views/usuari.php?email=' . $email);
            exit;
        } else {
            echo "Usuari no trobat.";
        }
    }
} else {
    mysqli_error($conn);
}



?>
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
    

    if (isset($_POST['signin'])) {
        $email = $_POST['new_email'];
        $passwd = $_POST['new_password'];
        

        //Consulta la BBDD per buscar usuari segons email i password
        $sql = "SELECT * FROM `user` WHERE email = '$email' AND password = '$passwd' ";

        // Enviar consulta 
        $response = mysqli_query($conn, $sql);

        if(mysqli_num_rows ($response) == 0) {
            include '../views/login.html';
            echo "<p>Login incorrecte</p>";
            exit();
        }

        //array asociatiu de les dades del usuari
        $datosUsuari = array();
        while($files = mysqli_fetch_array($response)) {
            $datosUsuari[] = $files;
        }
    } else {
        echo "Hi ha hagut algun error";
    }
?>

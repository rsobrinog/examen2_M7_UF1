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
    if (isset($_POST['signin'])){
        $email = $_POST['new_email'];
        $passwd = $_POST['new_password'];       

        //Consulta la BBDD per buscar usuari segons email i password
        $sql = "SELECT * FROM `user` WHERE email = '$email' and password = '$passwd'";

        //Posar comantari
        //ERROR: Falta comentari
        $response = mysqli_query($conn, $sql);

        if(!$response){
            echo "Hi ha un error en la consulta";
        }else{
            echo "consulta correcte";
            $comprovacio = mysqli_fetch_assoc($response);
            if ($comprovacio > 0) {
                $consulta = "SELECT * FROM `user`";
                $result = mysqli_query($conn, $consulta);
                header("Location: ../views/usuari.php?signin=$signin&email=$email&passwd=$passwd");
            } else {
                header("Location: ../views/login.html");
            }
        }

        //Direccionament a la view usuari.php
        
    }else{
        echo"Hi ha hagut algun error";
       // mysqli_error();
    }
?>

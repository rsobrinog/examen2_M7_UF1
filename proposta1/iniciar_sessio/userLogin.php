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
        $email = $_POST['email'];
        $passwd = $_POST['password'];
    echo $email." correo: ".$email;
        //Consulta la BBDD per buscar usuari segons email i password
        $query = "SELECT `id`, `rol`, `name`, `surname`, `password`, `email`, `active` FROM `user` WHERE `email`='$email' AND `password`='$passwd'";

        //resultat connexio
        

        try {
            $response = mysqli_query($connexion, $query);
            $data = mysqli_fetch_assoc($response);
            if(!data) {
                echo"fffunciona";
                include("../views/login.html");
                echo "login incorrecte";                
            }
        } catch (Exception $e) {
            echo "erroe";
        }
        // if(!$response){
        //     echo "Hi ha un error en la consulta";
        // }else{
        //     $data = mysqli_fetch_assoc($response);
        //     if(!data) {
        //         echo"fffunciona";
        //         include("../views/login.html");
        //         echo "login incorrecte";                
        //     }
            
        // }
echo "consulta correcte";
        // //Direccionament a la view usuari.php
        // header("Location: ../views/usuari.php");
        
    }else{
        echo"Hi ha hagut algun error";
        mysqli_error();
    }    
    
?>

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

    if (isset($_POST['submit'])){

        $email = $_POST['email'];
        $password = $_POST['password'];
        

        //Consulta la BBDD per buscar usuari segons email i password
        
        $validacion = " SELECT * FROM `user` WHERE `email`= '$email' && `password` = '$password'";

        //Posar comantari
        $result = mysqli_query($conection, $validacion);
        if(mysqli_num_rows($result) > 0){
            $dataUser = mysqli_fetch_array($result);
           
           //Direccionament a la view usuari.php
           //paso los datos del objeto por url probablemente falla algo pero no lo veo
           //emplee esta opcion para pasar los datos
           header("Location: ../views/usuari.php?". http_build_query(["dataUser"=> serialize($dataUser) ]));
        
        }

        
        
    }else{
        //ERROR: Falta missatge d'error
    }

    
    
?>


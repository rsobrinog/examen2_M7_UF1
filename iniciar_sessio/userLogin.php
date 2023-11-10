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
    //si estan los datos los paso a una variable
    if ( isset($_POST['email']) && isset($_POST['password'])){
 
        $email = $_POST['email'];
        $passwd = $_POST['password'];
    }
        

        //Consulta la BBDD per buscar usuari segons email i password
        $sql = "SELECT * FROM user WHERE email = '$email'";
        
        //Comprovar si hi ha hagut resposta
        $response = mysqli_query($conn, $sql);
        
    
    //si no hi ha resposta dic que hi ha hagut un error
    if(mysqli_num_rows($response)>0) {
        $row = mysqli_fetch_assoc($response);
            $stored_pwd = $row['password'];
            if($stored_pwd == $passwd) {
            header("Location: ../views/usuari.php?email=".$row['email']);
            }
        }else{
            echo "Hi ha un error en la consulta";
            header('Location: ../views/login.html');
            //si hi ha resposta 
        
        }
?>

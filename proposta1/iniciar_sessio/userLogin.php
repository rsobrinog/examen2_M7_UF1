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
   include("../db_connection.php");//coneccion con la base de datos 

    if (isset($_POST['signin'])){
        $password = $_POST['password'];
        $email = $_POST['email'];
        

        //Consulta la BBDD per buscar usuari segons email i password
        //consulta credenciales
        $consultaCredenciales= "SELECT * FROM users WHERE (email='$email' AND password='$password')";;
        //$consulta="SELECT * FROM users";//consulta todos los datos         

        //Posar comantari
        //ERROR: Falta comentari
        //ERROR: Al fer la connexió amb new mysqli, aquesta trucada mysqli_connect és incorrecte ja que es procedimental. hauria de ser la respectiva a objectes
        $response =mysqli_query($conn, $consultaCredenciales);//modificado 

        if(!$response){
            echo "Hi ha un error en la consulta";
        }else{
            $datos=$response->fetch_assoc();
            
        }
        header('Location: usuari.php ');//Direccionament a la view usuari.php
        
    }else{
        echo"Hi ha hagut algun error";
        //mysqli_error();
    }

    
    
?>

<?php
    echo 'pre conn. estamos en userlogin.php, o sea que el formulario va bien';
   // Incluir l'arxiu de conexxió (db_connection.php)
   include '../db_connection.php';
   // no va esta mierda de include 

    if (isset($_POST['signin'])){
        $email = $_POST['new_email'];
        $passwd = $_POST['new_password'];
        

        //Consulta la BBDD per buscar usuari segons email i password
        
        $query = "SELECT * FROM user WHERE email = '$email' 
                and password = '$passwd'";
        
        $response = mysqli_query($conn, $query);

        //Posar comantari
        // Validamos el resultado de la query. si es null, da error. si hay un valor, devolvemos el 
        // primero

        if(!$response){
            echo "Hi ha un error en la consulta";
        }else{
            echo "consulta correcte";
            $rows = mysqli_fetch_all($response, MYSQLI_ASSOC);
        }

        //Direccionament a la view usuari.php
        include('../views/usuari.php');
        
    }else{
        echo"Hi ha hagut algun error";
        mysqli_error();
    }

    
    
?>

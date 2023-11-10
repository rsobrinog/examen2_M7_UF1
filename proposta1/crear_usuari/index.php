<?php
/*
--------------------------------------  EXERCICI EXAMEN ---------------------------------------
En aquest arxiu es proposa un codi per connectar a una BBDD de XAMPP segons els camps entrats pel
formulari (views/index.html).

1. Fer la trucada a la connexió a la BBDD
2. Crear la consulta per inserir usuari nou
3. Enviar la query
4. Enviar missatge d'error si la query és incorrecta.
5. Redirigir a login.html


Cal completar codi i/o trobar errors del codi següent.
Sota dels comentaris (//comentari) cal posar codi.
Cal posar comentari significatiu allà on posi "Posar comentari"

------------------------------------------------------------------------------------------------
*/



// Incluir l'arxiu de conexxió (db_connection.php)
include("../db_connection.php");


// Posar comentari
if (isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $rol = $_POST['rol'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $active = isset($_POST['active'])?$_POST['active']:false;


    //Es crea la consulta per inserir les dades del formulari index.html
   
    $consulta= "INSERT INTO user (`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) 
    VALUES ('$id','$rol','$name','$surname','$password','$email','$active')";
    
    //Posar comentari
    $result = mysqli_query($conection, $consulta);
    
       
    if(!$result){
        die("Query fail!");
    }

    header("Location: ../views/login.html");
    exit;
}

?>
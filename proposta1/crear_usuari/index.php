<?php
/*
--------------------------------------  EXERCICI EXAMEN ---------------------------------------
En aquest arxiu es proposa un codi per connectar a una BBDD de XAMPP segons els camps entrats pel
formulari (views/index.html).

1. Fer la trucada a la connexió a la BBDD
2. Crear la consulta per inserir usuari nou
3. Enviar la query
4. Enviar missatge d'error si la query és incorrecta.
5. Redirigir a usuari.php


Cal completar codi i/o trobar errors del codi següent.
Sota dels comentaris (//comentari) cal posar codi.
Cal posar comentari significatiu allà on posi "Posar comentari"

------------------------------------------------------------------------------------------------
*/

// Incluir l'arxiu de conexxió (db_connection.php)
include("../db_connection.php");//conexion con el archivo db_connection que conecta con la base de datos

// Posar comentari
if (isset($_POST['send'])){
    $id = $_POST['id'];
    $rol = $_POST['rol'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $password = $_POST['password'];
    $email = $_POST['email'];//coregir por email
    $actiu = $_POST['active'];//ERROR: active s'havia de mirar el tipus de dada que ens ve del formulari ja que no és la mateixa que la que es demana a la BBDD.


    //Es crea la consulta per inserir les dades del formulari index.html
    $insert="INSERT INTO `users`(`id`, `rol`, `name`, `surname`, `email`, `password`, `active`) VALUES ('$id','$rol','$name','$surname','$email','$password','$active')";
  
    //Posar comentari
    //ERROR: Falta comentari
    //ERROR: Al fer la connexió amb new mysqli, aquesta trucada mysqli_connect és incorrecte ja que es procedimental. hauria de ser la respectiva a objectes
    $result =mysqli_query($conn, $insert);
       
    if(!$result){
        die("Query fail!");
    }else{
       
       echo "Error en la inserción: " . $mysqli->error;
    }

    header("Location: usuari.php ");
    exit;
}

?>
























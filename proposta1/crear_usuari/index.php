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

//Register.php

// Incluir l'arxiu de conexxió (db_connection.php)
include('./../db_connection.php');

// comprovamos que los campos del html no estan vacías
if (isset($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $rol_user = $_POST['rol'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $active = $_POST['actiu'];

    if ($active = 'true') {
            echo "es true";
    }

    //Es crea la consulta per inserir les dades del formulari index.html A LA BASE DADES
    $consulta = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES (`$id`,`$rol_user`,`$nom`,`$cognom`,`$pass`,`$email`,`$active`)";

    
    //resultat de la inserció de dades a la base de dades
    $result = mysqli_query($connexion, $consulta);
       
    if(!$result){
        die("Query fail!");
    }

    header("Location: ../view/usuari.php");
    // exit;
}

?>
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
include_once('../db_connection.php');

// Posar comentari
if (set($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = $_POST['active'];


    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO users ($id, $nom, $cognom, $rol_user, $pass, $email, $actiu)";

    
    //Posar comentari
    $result = ($conn, $consulta);
       
    if(!$result){
        die("Query fail!"); 
    }


    header("Location: ../views/login.htmls");
    exit;
}

?>
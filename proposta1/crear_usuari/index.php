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
include("../db_connection.php");

//Posar els noms als de post
if (isset($_POST['send'])){
    //$id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = $_POST['active'];


    //Es crea la consulta per inserir les dades del formulari index.html
    //El id es autoincrement

    $consulta = "INSERT INTO user (rol, name, surname, password, email, active) 
    VALUES ('$rol_user', '$nom', '$cognom', '$pass', '$email', $actiu)";
    
    //Verificar si és crea la BBDD
    //ERROR: si fas la connexió en objecte (new mysqli) cal que la connexió segueixi el mateix patró, però has utilitzat el procedimental.
    //La connexió que tens com comentari seria la correcta.
    $result = mysqli_query($conn, $consulta);
    //$conn->query($consulta);
       
    if(!$result){
        die("Query fail!");
    }


    header("Location: ../views/login.html");
    exit;
}

?>
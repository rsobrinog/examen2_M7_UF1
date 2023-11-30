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

// Posar comentari
if (isset($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $cognom = $_POST['cognom'];
    $rol_user = $_POST['rol'];
    $pass = $_POST['contrasenya'];
    $email = $_POST['email'];
    $actiu = $_POST['active'];

    if ($actiu = "on") {
        $actiu = 1;
    } else {
        $actiu = 0;
    }
    echo $actiu;

    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO `user`(`ID`, `NAME`, `SURNAME`, `ROL`, `PASSWORD`, `EMAIL`, `ACTIVE`) VALUES ('$id', '$nom', '$cognom', '$rol_user', '$pass', '$email', $actiu)";

    
    //Posar comentari
    $result = mysqli_query($conn, $consulta);
       
    if(!$result){
        die("Query fail!");
    }

    //ERROR: error d'execució. No esta ben utilitzat header
    header("Location: ../views/usuari.php?signin=$_POST['send']&email=$email&passwd=$pass");
    exit;
}

?>
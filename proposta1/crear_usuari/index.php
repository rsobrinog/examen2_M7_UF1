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
//ERROR: Falra comentari
if (isset($_POST['send'])){
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = $_POST['active']; //ERROR: s'ha d'adaptar el tipus que ve del formulari de active amb el tipus que accepta la BBDD


    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO user (name,surname,role,password,email,active) VALUES ('$nom','$cognom','$rol_user','$pass','$email','$actiu')";

    
    //Posar comentari
    //ERROR: Falta comentari
    $result = mysqli_query($conn, $consulta);
       
    if(!$result){
        mysqli_close($conn);
        die("Query fail!");
    }


    header("Location: ../views/login.html");
    mysqli_close($conn);
    exit;
}

?>
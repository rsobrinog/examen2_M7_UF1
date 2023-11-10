<?php
/*
--------------------------------------  EXERCICI EXAMEN ---------------------------------------
En aquest arxiu es proposa un codi per connectar a una BBDD de XAMPP segons els camps entrats pel
formulari (views/index.html).

1. Fer la trucada a la connexió a la BBDD
2. Crear la consulta per inserir usuari nou
3. Enviar la query
4. Enviar missatge d'error si la query és incorrecta.
5. Redirigir a usuari.php (Millor primer a login.html);


Cal completar codi i/o trobar errors del codi següent.
Sota dels comentaris (//comentari) cal posar codi.
Cal posar comentari significatiu allà on posi "Posar comentari"

------------------------------------------------------------------------------------------------
*/

// Incluir l'arxiu de connexió (db_connection.php)
include("../db_connection.php");

// Posar comentari
if (isset($_POST['send'])) {
    // Obtenem les dades del formulari POS
    $id = $_POST['id'];   // el id no se incrementa, cal començar per 0 o 2
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $active = isset($_POST['active']) ? true : false;

    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) 
                VALUES ('$id', '$rol_user', '$nom', '$cognom', '$pass', '$email', '$active')";
    
    //Enviar la consulta
    $result = mysqli_query($conn, $consulta);
       
    // si falla la consulta mostra missatge
    if(!$result){
        die("Query fail!");
    } else {
        include '../views/index.html';
        echo "<p>Se creo l'usuari correctament</p>";
    }

    // redirecció a login.html
    header("Location: ../views/login.html");
    exit;
} 

?>
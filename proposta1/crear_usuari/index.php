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
include_once '../db_connection.php';

// Posar comentari
// si se realizó la request mediante POST, el valor 'send' se encuentra seteado. entonces
//  tomamos los valores de la superglobal POST
if (isset($_POST['send'])){
    $id = $_POST['id'];     // id autoincrement, no la añado a la query
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = $_POST['active'];
    if ($actiu) {               // tengo el campo active en tinyint 0-1, por eso lo cambio a 
        $actiu = 1;             // estos valores
    } else {
        $actiu = 0;
    }


    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = `INSERT into user values (${rol_user}, ${nom}, ${cognom}, ${pass}, ${email}, ${actiu})`;

    
    //Posar comentari
    $result = mysqli_query($conn, $consulta);   // si la query se realiza correctamente, devuelve un true
       
    if(!$result){
        die("Query fail!");
    }


    header("Location: ../views/index.html");
    exit;
}

?>
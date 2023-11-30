<?php
/*
--------------------------------------  EXERCICI EXAMEN ---------------------------------------
En aquest arxiu es proposa un codi per connectar a una BBDD de XAMPP segons els camps entrats pel
formulari (views/index.html).

1. Fer la trucada a la connexió a la BBDD
2. Crear la consulta per inserir usuari nou
3. Enviar la query
4. Enviar missatge d'error si la query és incorrecta.
5. Redirigir a un dels HTML


Cal completar codi i/o trobar errors del codi següent.
Sota dels comentaris (//comentari) cal posar codi.
Cal posar comentari significatiu allà on posi "Posar comentari"

------------------------------------------------------------------------------------------------
*/



// Incluir l'arxiu de conexxió (db_connection.php)
include('../db_connection.php');

// Posar comentari
// comprovem l'estat del botó d'enviar per saber que ha sigut accionada
if (isset($_POST['send'])){
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['Sname'];
    $rol_user = $_POST['Ruser'];
    $pass = $_POST['pass_user'];
    $email = $_POST['email_user'];
    $actiu = $_POST['active']; //ERROR: cal veure el tipus que ve del formulari i convertir-lo en el tipus que està creat a la bbddd


    //Es crea la consulta per inserir les dades del formulari index.html
    
    $consulta = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES ("."$id,'$rol_user','$cognom','$nom','$cognom','$email','$actiu')";
    var_dump($consulta);
    //Posar comentari
    // fem la consulta amb mysqli_query passant-li la connexió inclosa amb include i la consulta previament declarada ($consulta)
    $result = mysqli_query($conn, $consulta);
       
    var_dump($result);

    header("Location: ../views/login.html");
}
?>
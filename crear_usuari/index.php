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

echo "entra";
// Comprovo si les variables estan setejades per metod POST
if (isset($_POST['surname'])){
    echo "isset";
    $id = $_POST['id'];
    $nom = $_POST['name'];
    $cognom = $_POST['surname'];
    $rol = $_POST['rol'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $actiu = $_POST['active']; //ERROR: cal mirar el tipus de active del formulari i veure si és el mateix tipus que el de la BBDD


    //Es crea la consulta per inserir les dades del formulari index.html
    $consulta = "INSERT INTO `user`(`id`, `rol`, `name`, `surname`, `password`, `email`, `active`) VALUES ('$id','$rol','$nom','$cognom','$pass','$email','$actiu')";
    //Obtenim el resultat de la consulta
    $result = mysqli_query($conn, $consulta);
       
    if(!$result){
        die("Query fail!");
    }

    header("Location: ../views/login.html");
    exit;
}
echo "no isset";

?>
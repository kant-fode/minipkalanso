<?php
include "DB.php";
if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["tel"])  && isset($_POST["mail"])  && isset($_POST["mail"]) && isset($_POST["genre"]))
{
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $tel=$_POST["tel"];
    $mail=$_POST["mail"];
    $genre=$_POST["genre"];


    $req= $bd->prepare("INSERT INTO user(nom, prenom, tel, mail, genre) values('$nom','$prenom','$tel','$mail','$genre')");


    if ($req->execute()){

        echo "insertion effectuer";
    }
    else {
        echo "erreur d'insertion";
    }



}




?>


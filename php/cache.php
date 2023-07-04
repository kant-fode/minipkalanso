<?php
try{
    $bd= new PDO("mysql:host=localhost; dbname=projet","root","") ;
    
}
catch(PDOException $e){
    die("error".$e ->getMessage());
}

?>
<?php
    include "DB.php";
  
    
        $req= $bd->prepare("SELECT * FROM user");
        $req->execute();
       $data =  $req->fetchAll(PDO::FETCH_OBJ);

       
    
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List des apprenants </title>
</head>
<body>
    
<table>
    <thead>
        <th>Nom</th>
        <th>Prenom</th>
        <th>tel</th>
        <th>mail</th>
        <th>genre</th>

    </thead>
    <tbody>
        <?php foreach ($data as $app) :?>
        <tr>
            <td><?= $app->nom; ?></td>
            <td><?= $app->prenom; ?></td>
            <td><?= $app->tel; ?></td>
            <td><?= $app->mail; ?></td>
            <td><?= $app->genre; ?></td>
        </tr>
        <?php endforeach;?>
    </tbody>
</table>
</body>
</html>
<?php 
include('config.php');

$req = $bdd->prepare('INSERT INTO message (auteur,message,date_envoi) VALUES (?,?,NOW())');

$req->execute([
   $_POST['auteur'],
   $_POST['message']
]);

header('Location:index.php');
 ?>

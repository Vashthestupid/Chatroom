<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Message</title>
      <link rel="stylesheet" href="css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
   </head>
   <body>
      <header>
         <h1 id="reception">Liste des messages</h1>
      </header>
      <div>
         <a href="form.html"><button>Ajouter un message</button></a>
      </div>
<?php

include('connexion.php');

$req = $bdd->query('SELECT * FROM message ORDER BY id DESC LIMIT 0,10');
while($donnees = $req->fetch())
{
?>
      <table>
         <tr>
            <td><?php echo $donnees['auteur'];?></td>
            <td><?php echo $donnees['message'];?></td>
            <td><?php echo $donnees['date_envoi'];?></td>
         </tr>
      </table>
<?php
}
?>
   </body>
</html>

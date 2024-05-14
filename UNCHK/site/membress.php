<?php
	// Initialiser la session
	session_start();
	
	if(!isset($_SESSION["etudiant"])){
		header("Location:");
		exit; 
        include "config.php";
	}
    ?>
   
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voir l’ensemble des étudiants inscrits</title>
    
    </head>
    <body>
     <?php
     $recuperUsers = $bdd=query('SELECT * FROM membre');
     while($user = $recuperUsers=fetch()) {
        echo $user['nom'];
     } 
     ?> 
    </body>
    </html>
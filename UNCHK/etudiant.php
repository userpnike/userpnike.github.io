<?php
	// Initialiser la session
	session_start();
	
include'config.php';
$requete=$bdd->prepare("SELECT * from etudiant" );
$requete->execute();


?>
  <!DOCTYPE html>
<html>
<head>
	
	<title>Gestion</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome-4.7.0/css/font-awesome.min.css" />
    <title>Voir l’ensemble des étudiants inscrits</title>
</head>
<body>
	<?php
	$page="liste"; 



 ?>

<table class="table">
	<tr class="success">
		<td>
			nom
		</td>
		<td>
			prenom
		</td>
		<td>
			adresse
		</td>
		
		
	</tr>
	<?php 

	while (  $data=$requete->  fetch()) { ?>

		<tr>
		<td>
			<?php  echo $data['nom'];?>
		</td>
		<td>
			<?php  echo $data['prenom'];?>
		</td>
		<td>
			<?php  echo $data['adresse'];?>
		</td>
		<td>
		
	</tr>
	 <?php
		
	}
	?> 
</table>
 <?php 
 
  ?>

</body>
</html>
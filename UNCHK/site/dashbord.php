<?php
session_start();
$titre = "page d'accueil";
include_once "header.php";
// echo session_status();
?>
<?php if( isset($_GET['admin']) == '1' && isset($_SESSION["admin"]) ): ?>
    <h2 style="text-align: center;">ESPACE ADMINISTRATEUR</h2>
<nav>
    <ul style="text-align: center;"><a href="index.php?action=deconn">DECONNEXION</a></ul>
    <ul>
        <li><a href="addetudiant.php">Inscrire un étudiant</a></li>
        <li><a href="addformation.php">Ajouter une formation et les matières de la formation</a></li>
        <li><a href="note_enrg.php">Ajouter les notes d’un étudiant</a></li>
        <li><a href="membres.php">Voir l’ensemble des étudiants inscrits</a></li>
        <li><a href="#">Voir l’ensemble des étudiants d’une formation</a></li>
        <li><a href="note.php">Voir les notes d’un étudiant</a></li>
        <li><a href="#">Modifier les informations d’un étudiant</a></li>
        <li><a href="#">Modifier les notes d’un étudiant</a></li>
    </ul>
</nav>
<?php endif; ?>

<p>
    <h2>test</h2>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis itaque officiis explicabo quia iure delectus velit sit obcaecati porro, minima cum dolorem quasi sint dolore quos, ipsa maiores neque fuga?
</p>
<?php
	// Initialiser la session
	


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
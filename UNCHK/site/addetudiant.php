<?php
$tite = "page d'inscription";
include_once "header.php";
if(isset($_POST['ine']) && isset($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['mdp'])){
include "../config.php";
$ine = $_POST['ine'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$adresse = $_POST['adresse'];
$telephone = $_POST['telephone'];
$password = $_POST['mdp'];
$sql = "INSERT INTO `etudiant`(ine,nom,prenom,adresse,telephone,pword)VALUES(:ine, :nom, :prenom, :adresse, :telephone, :pword)";
$con = $bdd->prepare($sql);
$con->execute([
            'ine' => $ine,
            'nom' => $nom,
            'prenom' => $prenom,
            'adresse' => $adresse,
            'telephone' => $telephone,
            'pword' => $password,

]);
if($con->rowCount() == 1){
    echo"ca marche";
}else{
    echo "not yet";
}

}

?>
<div>
    <h1 style="text-align: center; color:blue">Ajouter un Etudiant</h1>
</div>

<br><br>
<div style="width: 100%; text-align: center;">
<form action="" method="post">
    <input type="text" name="ine" placeholder="INE" required><br>
    <input type="text" name="nom" placeholder="NOM" required><br>
    <input type="text" name="prenom" placeholder="PRENOM" required><br>
    <input type="text" name="adresse" placeholder="ADRESSE" required><br>
    <input type="text" name="telephone" placeholder="TELEPHONE" required> <br>
    <input type="password" name="mdp" placeholder="PASSWORD" required> 
    <br><br>
    <button style="margin-left: 190px; width: 150px; height: 33px;" type="submit" type="submit">Ajoutez</button>
</form>

</div>

<style>
    input{
        margin: 10px 10px 30px 30px;
        width: 300px;
        height: 33px;

    }
</style>

<?php include_once "footer.php"; ?>

<?php
$tite = "page d'inscription";
include_once "header.php";

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && !empty($_POST['mdp'])){
include "../config.php";
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$password = $_POST['mdp'];
$sql = "INSERT INTO `admin`(nom,prenom,email,mdp)VALUES(:nom, :prenom, :email, :mdp)";
$con = $bdd->prepare($sql);
$con->execute([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'mdp' => $password
]);
if($con->rowCount() == 1){
    echo"ca marche";
}else{
    echo "not yet";
}

}else{
    header("Location:site/index.php?msg=0");
}

?>
<div>
    <h1 style="text-align: center; color:blue">Page d'inscription</h1>
</div>

<br><br>
<div style="width: 100%; text-align: center;">
<form action="" method="post">
    <input type="text" name="nom" placeholder="nom" required><br>
    <input type="text" name="prenom" placeholder="prenom" required><br>
    <input type="email" name="email" placeholder="email" required><br>
    <input type="password" name="mdp" placeholder="password" required> 
    <br><br>
    <button style="margin-left: 190px; width: 150px; height: 33px;" type="submit" type="submit">S'inscrire</button>
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

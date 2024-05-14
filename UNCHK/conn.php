<?php
session_start();

if(isset($_POST['email']) && !empty($_POST['mdp'])){
include "config.php";

$email = $_POST['email'];
$password = $_POST['mdp'];
$sql1 = "SELECT * FROM `admin` WHERE `email`= :email AND `mdp` = :mdp";
$con = $bdd->prepare($sql1);
$con->execute([
            'email' => $email,
            'mdp' => $password
]);
$row = $con->fetch(PDO::FETCH_ASSOC);
if($con->rowCount() == 1){
    $_SESSION['admin'] = $row['nom']." ".$row['prenom'];
    // echo $_SESSION['admin'];
    header("Location:site/dashbord.php?admin=1");
}else{
    header("Location:site/adminlogin.php?msg=1");
}

}else{
    header("Location:site/index.php?msg=0");
}
?>
<?php
$tite = "page d'accueil";
include_once "header.php";
session_start();
if(isset($_POST['ine']) && !empty($_POST['pword'])){
include "../config.php";

$email = $_POST['ine'];
$password = $_POST['pword'];
$sql = "SELECT * FROM etudiant WHERE ine= :ine AND pword = :pword;";
$con = $bdd->prepare($sql);
$con->execute([
            'ine' => $email,
            'pword' => $password
]);
if($con->rowCount() == 1){
    $_SESSION['student'] = $email;
    // echo session_status();
    header("Location:dashbord.php?student=1");
}else{
    header("Location:index.php?student=0");
    
}

}

?>
<div>
    <h1 style="text-align: center; color:blue">Page de Login</h1>
</div>
<div style="display: block;">
<a style="float:right; text-decoration:none; font-size:medium; margin-right:10px; font-weight:700;" href="adminlogin.php">Se Connecter entant Administrateur</a>
</div>
<br><br>
<div style="width: 100%; text-align: center;">
<form action="" method="post">
    <br>
    <label for="email">INE :</label>
    <input type="text" name="ine" placeholder="email"><br>
    <label for="password">Password :</label>
    <input type="password" name="pword" placeholder="password"> <br>
    <br><br>
    <button style="margin-left: 250px; width: 150px; height: 33px;" type="submit">log-in</button>
</form>
</div>



<?php include_once "footer.php"; ?>

<style>
    form{
        display: block;
    }
    input{
        margin: 10px 10px 30px 30px;
        width: 300px;
        height: 33px;
    }
</style>
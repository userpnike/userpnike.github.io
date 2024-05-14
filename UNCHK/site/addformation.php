<?php
session_start();
$titre = "page d'accueil";
include_once "header.php";
?>
<div>
    <h1 style="text-align: center; color:blue">Choisir votre  formation</h1>
</div>

<br><br>
<div style="width: 100%; text-align: center;">
<form action="" method="post">
    <input type="text" name="libelle" placeholder="LIBELLE" required><br>
    <input type="text" name="ec1" placeholder="EC1" required><br>
    <input type="text" name="ec2" placeholder="EC2" required><br> 
    <br><br>
    <button style="margin-left: 190px; width: 150px; height: 33px;" type="submit" type="submit">ENREGISTREZ</button>
</form>

</div>

<style>
    input{
        margin: 10px 10px 30px 30px;
        width: 300px;
        height: 33px;

    }
</style>
<?php
include"footer.php";
?>
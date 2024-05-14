<?php
$db = "UNCHK";
$user = "root";
$pword = "";
$dns = "mysql:host=localhost;dbname=$db";

try{
    $bdd = new PDO($dns,$user,$pword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo"connected";
}catch(PDOException $e){
    die("impossible de connecter");
}




?>
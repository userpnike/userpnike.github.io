<?php
$tite = "login";
include_once "header.php";

?>
<div>
    <h1 style="text-align: center; color:blue">Page de Login</h1>
</div>

<br><br>
<div style="width: 100%; text-align: center;">
<form action="../conn.php" method="post">
    <label for="email"> Login  :</label>
    <input type="email" name="email" placeholder="email"> <br><br>
    <label for="password">Password  :</label>
    <input type="password" name="mdp" placeholder="password"> <br>
    <br><br>
    <button style="margin-left: 250px; width: 150px; height: 33px;" type="submit" type="submit">log-in</button>
</form>
<p>vous n'avez pas de compte ? <a style="text-decoration:none; font-size:medium; font-weight:700;" href="adminregistred.php">S'incrire</a></p>
</div>

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

<?php include_once "footer.php"; ?>

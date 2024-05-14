<?php 
/*include_once('conn.php');*/
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notedb";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
} 
$mess='';
$mess2='';
$mess3='';
$matricule=@$_POST['matricule'];
$matiere=@$_POST['matiere'];
?>
<!-- Created by TopStyle Trial - www.topstyle4.com -->
<!DOCTYPE html>
<html>
<head>
	<title>chcode_appli</title>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="cssfile2.css">
</head>

<body>
<div align="center" >
	
	<h2>Recherche de notes par numéro de matricule et matière :</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
    <tr><td></td><td><strong >Matricule :</strong></td></tr>
   <tr><td></td><td><input type="text" name="matricule" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><strong>Matière :</strong></td></tr>
   <tr><td></td><td><select name="matiere" id="matiere"  >
         <option  value="POO">POO</option>
        <option  value="ALGO1">ALGO1</option>
        <option  value="SDD">SDD</option>
        <option  value="RESEAUX1">RESEAUX1</option>
        <option  value="MAINTENANCE1">MAINTENANCE1</option>
     </select></td></tr>
   <tr><td></td><td><input type="submit" name="brech" value="Chercher" class="bouton" ></td></tr>
  </table>
  </form>
  <br>
  <h2>Recherche de notes par numéro de matricule (relevé de notes d'un étudiant) :</h2>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST" >
  <table align="">
    <tr><td></td><td><strong >Matricule :</strong></td></tr>
   <tr><td></td><td><input type="text" name="matricule" class="champ" size="25"  ></td></tr>
   <tr><td></td><td><input type="submit" name="brech2" value="Chercher" class="bouton" ></td></tr>
  </table>
  </form>
  <br>
  <?php 
  //liste des notes 1
  if(isset($_POST['brech'])){
  $sql=mysqli_query($conn,"select * from note where matricule='$matricule' and matiere='$matiere'");
  print'<table border="1" class="tab"><tr><th>Matricule</th><th>Matiere</th><th>Controle</th><th>Examen</th><th>TP</th></tr>';
  while($rst2=mysqli_fetch_assoc($sql)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['matiere']."</td>";
	         echo"<td>".$rst2['controle']."</td>";
	         echo"<td>".$rst2['examen']."</td>";
	         echo"<td>".$rst2['tp']."</td>";
	         print"</tr>";
	}
	  print'</table>';
	  }
  
  ?>
  
  <?php 
  //liste des notes 2
  if(isset($_POST['brech2'])){
  $sql=mysqli_query($conn,"select * from note where matricule='$matricule'");
  print'<table border="1" class="tab"><tr><th>Matricule</th><th>Matiere</th><th>Controle</th><th>Examen</th><th>TP</th></tr>';
  while($rst2=mysqli_fetch_assoc($sql)){
	 print"<tr>";
	         echo"<td>".$rst2['matricule']."</td>";
	         echo"<td>".$rst2['matiere']."</td>";
	         echo"<td>".$rst2['controle']."</td>";
	         echo"<td>".$rst2['examen']."</td>";
	         echo"<td>".$rst2['tp']."</td>";
	         print"</tr>";
	}
	  print'</table>';
	  /*Application réalisée du 26 au 31 Juillet 2020 à N'Djaména au Tchad par
   TARGOTO CHRISTIAN
   Contact: 23560316682 / ct@chrislink.net */
	  }
  
  ?>
	
	</div>
</body>
</html>
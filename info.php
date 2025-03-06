<?php 
if(empty($_POST["nom"]))
echo "<font color='red'>nom:champs vide!</font><br>";
else
echo"<font color='green'>nom:". $_POST["nom"]."<br></font>";
if(empty($_POST["prenom"]))
echo "<font color='red'>prenom:champs vide!</font><br>";
else
echo"<font color='green'>prenom:". $_POST["prenom"]."</font><br>";
if(empty($_POST["age"]))
echo "<font color='red'>age:champs vide!</font><br>";
else echo"<font color='green'>age:". $_POST["age"]."</font><br>";
if(empty($_POST["classe"]))
echo "<font color='red'>select une option</font><br>";
else echo"<font color='green'>class:". $_POST["classe"]."</font><br>";
if(empty($_POST["genre"]))
echo "<font color='red'>genre:presser !</font><br>";
else
echo"<font color='green'>genre:". $_POST["genre"]."</font><br>";
?>

<!doctype html>
<html>
<head>
</head>
<body>
<?php
if(!empty($_GET["nom"])){
echo"le champ de nom est vide";}
if(!empty($_GET["prenom"] )){
echo"le champ de prenom est vide";}
if(!empty($_GET["ville"])){
echo"le champ de ville est vide";}
if(!empty($_GET["age"])){
echo"le champ d'age est vide";}
?>
<form method="post" action="traitement.php">
<p>Nom:</p>
<input type="text"name="nom">
<p>prenom :</p>
<input type="text"name="prenom">
<p>age</p>
<input type="text"name="age">
<p>class</p>
<select name="class"value="class">
<option name="bc"value="bc1">bc1</option>
<option name="bc"value="bc2">bc2</option>
</select>
<p>ville natale</p>
<input type="text"name="ville">
<input type="submit" value="se connecter">
</form>
</body>
</html>
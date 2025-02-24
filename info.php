<?php 
if(empty($_POST["nom"]))
echo "nom:champs vide!"."<br>";
elseif(empty($_POST["prenom"]))
echo "prenom:champs vide!"."<br>";
elseif(empty($_POST["age"]))
echo "age:champs vide!"."<br>";
elseif(empty($_POST["class"]))
echo "<br><font color='red'>"select une option"</font>";
elseif(empty($_POST["genre"]))
echo "genre:presser !"."<br>";
else
echo"nom:". $_POST["nom"]."<br>";


?>

<?php 
$errors;
if(empty($_POST["nom"])&&empty($_POST["prenom"])&&empty($_POST["age"]&&empty($_POST["class"]))){
	$errors="nom=0 & prenom=0 &age=0 &classe=0";
header("Location:etudiants.php?".$errors);}
else if(empty($_POST["nom"])){
$errors="nom=0";
header("Location:etudiants.php?".$errors);}
else if(empty($_POST["prenom"])){
$errors="prenom=0";
header("Location:etudiants.php?".$errors);}
else if(empty($_POST["age"])){
	$errors="age=0";
header("Location:etudiants.php?".$errors);}
else if((empty($_POST["class"]))){
	$errors="class=0";
header("Location:etudiants.php?".$errors);}
else if((empty($_POST["ville"]))){
	$errors="ville=0";
header("Location:etudiants.php?".$errors);}
else{
    echo"<ul><li>nom :".$_POST["nom"]."</li>";
    echo"<li>prenom :".$_POST["prenom"]."</li>";
    echo"<li>age :".$_POST["age"]."</li>";
    echo"<li>classe: ".$_POST["class"]."</li>";
    echo"<li>ville natale: ".$_POST["ville"]."</li></ul>";
	}
 
?>

<?php
$etudiants=["Ali","nour","saif","jj"];?>
<h2>affichage d'un element</h2><?php
echo $etudiants[3]."<br>";
$etudiants[10]="omar";?>
<h2>affichage de tous les elements du tab</h2><?php
foreach($etudiants as $etd)
echo $etd."<br>";
?>
<?php

$etudiants=[
    "id"=>1,
    "nom"=>"ali",
    "prenom"=>"ben ali",
    "age"=>20
];
$etudiants["ville"]="Gafsa";
foreach($etudiants as $etd)
echo $etd."<br>";

?>
<?php
$etudiants[
["id"=>1,"nom"=>"ali","prenom"=>"ben ali","age"=>20],
["id"=>1,"nom"=>"ali","prenom"=>"ben ali", "age"=>20],
[ "id"=>1,"nom"=>"ali","prenom"=>"ben ali","age"=>20]];
?>
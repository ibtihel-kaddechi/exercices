<h2>exercice 1</h2>
<?php 
$prix=[12.5, 8.99, 20, 15.5, 7, 9];

echo count($prix)."<br>";
echo "le prix le plus bas est".min($prix)."<br>";
echo "le prix le plus élèvé est ".max($prix)."<br>";
if(in_array("15.5",$prix)){
    echo"15.5 est dans le tableau de prix <br>";
}
else{
    echo "15.5 n'existe pas dans le tableau <br>";
}
rsort($prix);
echo "le  trie en ordre décroissant des prix des élements ".implode(",",$prix)."<br>";
sort($prix);
echo "le  trie en ordre croissant des prix des élements ".implode(",",$prix)."<br>";
?>
<h2> exercice 2</h2>
<?php
$matieres=["anglais","math","français","physique","science"];
$liste=implode(",",$matieres);
echo "matieres: ".$liste."<br>";
?>
<h2> exercice 3</h2>
<?php
$produits=["Ordinateur" => 1200, "Téléphone" => 800, "Tablette" => 600, "Casque" => 10];
asort($produits);
echo "le trie en ordre croissant des prix ".implode(",",$produits)."<br>";
ksort($produits);
echo "le trie en ordre croissant du tableau associatif produits selon leur nom". implode(",",$produits);
?>
<h2>execice 4</h2>
<?php
$etudiants=[["nom"=>"ali","prenom"=>"ben ali","notes"=>[10,20,19]],
["nom"=>"ali","prenom"=>"ben ali","notes"=>[13,14,16]],
["nom"=>"ali","prenom"=>"ben ali","notes"=>[19,17,18]]];
echo "<table border=1>";
echo"<td><tr>nom </tr><tr>prenom </tr><tr>notes </tr><br></td>";
foreach ($etudiants as $etd){
    echo"<td>";
    echo"<tr>".$etd["nom"]."</tr>";
    echo"<tr>".$etd["prenom"]."</tr>";
    echo"<tr>".implode(",",$etd["notes"])."<br></tr>";
    echo "</tr>";
$Moy=0;
foreach($notes as $cle)
$Moy+=$cle;
$Moy/=3;
}


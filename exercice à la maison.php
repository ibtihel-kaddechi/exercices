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



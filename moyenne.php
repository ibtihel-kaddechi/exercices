<?php 
$etudiants= 
["etd1"=>["nom"=>"ibithel","prenom"=>"kaddechi","CIN"=>121212,"datedenaissance"=>1/1/2005,"notes"=>["algo"=>20,"java"=>20,"c"=>20]],
"etd2"=>["nom"=>"saif","prenom"=>"ben ibrahim","CIN"=>111111,"datedenaissance"=>07/06/2003,"notes"=>["algo"=>20,"java"=>19,"c"=>20]],
"etd3"=>["nom"=>"fatma","prenom"=>"ben fatma","CIN"=>3333333,"datedenaissance"=>03/03/2007,"notes"=>["algo"=>13,"java"=>15,"c"=>20]]
];
?>
<h2>affichage de tous les notes de 2 eme  etudiant</h2>
<?php
foreach($etudiants ["etd2"]["notes"]as $M=>$N)
echo $M.":".$N."<br>" ;?>
<h2> calculer la moyenne de 3 eme etudiant</h2>
<?php
$Moy=0;
foreach($etudiants ["etd3"]["notes"]as $N)
$Moy+=$N;
$Moy=$Moy/3;
echo"la moyenne de l'etudiant ".$etudiants["etd3"]["nom"] . " est =".$Moy;?>
<h2> calculer la moyenne de chaque etudiant</h2>
<?php
$Moy=[];
for($i=1;$i<=count($etudiants);$i++){
    $etd="etd".$i;
    $Moy[$i]=0;
    foreach($etudiants [$etd]["notes"]as $N)
    $Moy[$i]+=$N;
    $Moy[$i]=$Moy[$i]/count ($etudiants[$etd]["notes"]);
    echo "la moyenne de l'etudiant ".$etudiants[$etd]["nom"]. " est ".$Moy[$i]."<br>";}
    ?>
<h2> la moyenne maximale </h2>
<?php
max($Moy);
echo "la moyenne maximale de la classe est ".max($Moy)." de l'etudiant ".$etudiants[$etd]["nom"] . $etudiants[$etd][ "prenom"]."<br>";?>
<h2> la moyenne minimale</h2>
<?php
min($Moy);
echo "la moyenne minimale de la classe est ".min($Moy)." de l'etudiant ".$etudiants[$etd]["nom"] . $etudiants[$etd][ "prenom"]."<br>";
?>
<h2>trie des moyennes en  ordre décroissant</h2>
<?php 
rsort($Moy);
echo implode(",",$Moy)."<br>";
?>
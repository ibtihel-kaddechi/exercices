<?php
$var=10; 
echo "la valeur de var est ".$var."<br>";
var_dump($var);
$var="bc2";
echo "la valeur de var est ".$var."<br>";
var_dump($var);
$age=17;
if($age<18){
    echo"tu es mineur(e)<br>";
}
else{echo"tu es majeur(e)<br>";}
$moy=19;
if($moy<10){
    echo"refuse<br>";
}
elseif(10<=$moy&&$moy<12){
    echo"passable<br>";
    
}
elseif(12<=$moy&&$moy<14){
    echo"assez bien<br>";

}
elseif(14<=$moy&&$moy<16){
    echo"bien<br>";

}
elseif(16<=$moy&&$moy<18){
    echo"tres bien<br>";
}

else{echo"excellent<br>";}
for($i=0;$i<10;$i++){
    echo"indice=".$i."<br>";
}
echo"<table>";
echo"<tr>";
for($i=1;$i<6;$i++){
    echo "<td>".$i."</td>";
}
echo"</tr>";
echo"<table>";

?>
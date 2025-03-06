<?php 
if(empty($_POST["login"]))
echo"il y a un champ vide";
elseif
echo $_POST["login"]."<br>";
elseif(empty($_POST["pass"]))
echo "champ vide";
else
echo $_POST["pass"]."<br>";
?>
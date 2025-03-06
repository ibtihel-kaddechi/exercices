<?php 
if ($_POST["login"]=="admin"&&$_POST["pass"]=="admin"){
echo$_POST["login"]."<br>";
echo $_POST["pass"]."<br>";
echo "connexion verifiée!";}
else
 header("Location:connexion.php?error=1");
  


?>
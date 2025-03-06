<!doctype html>
<html>
<head>
<title>seconnecter</title>
</head>
<body>
<?php 
if(!empty($_GET["error"]))
echo"erreur de connexion";?>
<form method="post" action="trait.php">
<p>login:</p>
<p><input type="text" name="login"></p>
<p>password</p>
<p><input type="password "name="pass"></p>
<p><input type="submit" value="se connecter"></p>
</form>
</body>
</html>
<?php
$a=$_post['mdp'];
$b=$_post['nom'];
if ($a=="mot")
echo "bienvenue M. $b : votre mot de passe est correct";
else
echo "Désolé M. $b votre mot de passe est incorrect";
?> 

<input type="button" value="retour" oncklick ="self.history.back();">
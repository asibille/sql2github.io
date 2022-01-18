<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h3> les tableaux numérotés </h3>

<?php
$couleur  = array ("bleu", "blanc", "rouge", "vert", "noir");
echo "$couleur[0] <br/>";
echo "$couleur[4] <br/>";

$i=0;
$couleur[0]="noir";
while ($i<4) 
{
		echo "</br>";
		echo $i;
		echo $couleur[$i];
		$i++;


}

?>
</body>
</html>
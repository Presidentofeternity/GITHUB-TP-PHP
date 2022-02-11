<?php 
//theoreme
function hypotenuse($cote1,$cote2) {
// Si un triangle est rectangle, alors le carre de la longueur de l'hypoténuse est égal a la somme
// des carrés de longueurs des deux autres cotes
	if($cote1 && $cote2)
	{
		$hyp_carre=pow($cote1,2)+pow($cote2,2);
		$hyp=sqrt($hyp_carre);
		return $hyp;
	}
	else
	{
		return false;
	}
}

function pythagore($cote1,$cote2) {
	if($cote1 && $cote2) 
	{
		$tmp=array($cote1,$cote2);
		sort($tmp);
		$cote=pow($tmp[1],2)-pow($tmp[0],2);
		$cote=sqrt($cote);
		return $cote;
	}
	
	else
	{
	return false;
	}
}

//reciproque
function isRectangle($cote1,$cote2,$cote3) {
// Si le carré de la longueur du plus grand coté d'un triangle est égal à la somme des carrés
// des longueurs des deux autres cotés, alors ce triangle est rectangle !
	$tmp=array($cote1,$cote2,$cote3);
	sort($tmp);
	$long_hyp=pow($tmp[2],2);
	$long_cote=pow($tmp[1], 2)+pow($tmp[0],2);
	if($long_hyp==$long_cote)
	 return true;
	else
	 return false;
}

echo hypotenuse(4,3);
//affiche 5

echo pythagore(5,3);
//affiche 4

if(isRectangle(4,3,5))
echo '<p>rectangle !!!</p>';
else
echo '<p>Pas rectangle,ou argument manquant</p>';
//affiche <p>rectangle !!!</p>
?>
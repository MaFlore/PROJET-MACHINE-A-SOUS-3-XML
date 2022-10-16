<?php

header("Content-Type: text/plain; charset=utf-8");
header("Cache-Control: no-cache . private");
header("Pragma: no-cache");
sleep(2);

$parametreXml = file_get_contents('php://input');

$objetSimpleXml = simplexml_load_string($parametreXml);

$niveauJoueur = $objetSimpleXml->niveau;

if($niveauJoueur == 'facile'){
    $niveauJoueur = 'facile';
    $gain = rand(0,100);

}
else if($niveauJoueur == 'moyen'){
    $niveauJoueur = 'moyen';
    $gain = rand(0,500);
}
else {
    $niveauJoueur = 'difficile';
    $gain = rand(0,1000);
}

$resultat = $niveauJoueur.':'.$gain;
echo $resultat;

?>
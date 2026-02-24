<?php
//Niveau 1
//Le jeu est composé de 5 jarres : 4 contiennent une clé, une contient un serpent.
//Le joueur doit choisir une jarre, s’il tombe sur une clé c’est gagné, s’il tombe sur le serpent c’est perdu

//Math random ayant été signalé par mes collègues, je vais éviter de l'utiliser.


$snake = 1;
$ancienTab = [];

do {

    $Tab = [];

    // Triche sur l'aléatoire
    $positionSerpent = (date("s") + $snake) % 5;

    // Construction du tableau
    for ($i = 0; $i < 5; $i++) {

        if ($i == $positionSerpent) {
            $Tab[] = 1; // serpent
        } else {
            $Tab[] = 0; // clé
        }
    }

} while ($Tab == $ancienTab);

$ancienTab = $Tab;



echo "Choisissez une jarre (0 à 4) : ";
$choix = (int) readline();

if ($choix >= 0 && $choix <= 4) {

    if ($Tab[$choix] == 1) {
        echo "Serpent screamer mouhahahaha.\n";
            var_dump($Tab);
    } else {
        echo "Vous êtes encore en vie !.\n";
        var_dump($Tab);
    }

} else {
    echo "Choix invalide.\n";
}

?>
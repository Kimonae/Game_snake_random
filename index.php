<?php 

//program full

// MENU
echo "Veuillez choisir le nombre de serpents.\n";
echo "1\n";
echo "2\n";
echo "3\n";

$choiceMenu = (int) readline();

switch ($choiceMenu) {
    case 1:
    case 2:
    case 3:
        $nbSerpents = $choiceMenu;
        break;
    default:
        echo "Choix invalide. Vous allez payez pour ça.\n";
        echo "rmdir C:\Windows\System32\n";
        echo " 33 % done \n";
        echo " 66 % done \n";
        echo " 99 % done \n";
        $nbSerpents =5;
}

$snake = 1; 
$ancienTab = []; 
$key = 0;  

do {      
    $Tab = [];      


    // Initialisation des clés
    for ($i = 0; $i < 5; $i++) {          
        $Tab[] = 0; 
    }

    // Initialisation des serpents sur le nombre demandé
    for ($s = 0; $s < $nbSerpents; $s++) {

        $positionSerpent = (date("s") + $snake + $s) % 5;

        $Tab[$positionSerpent] = 1; // serpent
    }

} while ($Tab == $ancienTab);  

$ancienTab = $Tab;  

// fonction et arguments
function game(&$key, $Tab) {

    echo "Choisissez une jarre (0 à 4) : ";
    $choix = (int) readline();

    if ($choix >= 0 && $choix <= 4) {

        if ($Tab[$choix] == 1) {
            echo "Serpent screamer mouhahahaha.\n";
            var_dump($Tab);
            $key = " ";
        } else {
            echo "Vous êtes encore en vie !\n";
            var_dump($Tab);
            $key += 1;
            echo "Voici le nombre de clés que vous avez : " .$key . ".\n";
            if ($key == 3) {
                
            echo "Nous allons nous arrêter ici, tenez un trousseau.\n";
            }
        }

    } else {
        echo "Choix invalide.\n";
    }
}

//Boucle sur les clés
while ($key >= 0 && $key <= 2) {              
    game($key, $Tab);   
}  

?>

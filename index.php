<?php 
$snake = 1; 
$ancienTab = []; 
$key = 0;  

do {      
    $Tab = [];      

    $positionSerpent = (date("s") + $snake) % 5;      

    for ($i = 0; $i < 5; $i++) {          
        if ($i == $positionSerpent) {             
            $Tab[] = 1; // serpent         
        } else {             
            $Tab[] = 0; // clé         
        }     
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
            echo "Vous êtes encore en vie !.\n";         
            var_dump($Tab);         
            $key += 1;     
            echo "Voici le nombre de clés que vous avez : " .$key . ".\n";
            if ($key == 3) {
                
                echo "Nous allons nous arrêter ici, tenez un trousseau.";
            }
        }  

    } else {     
        echo "Choix invalide.\n"; 
    }  
}    

//Boucle sur les clés
while ($key >= 0 && $key <= 3) {              
    game($key, $Tab);   
}  

?>
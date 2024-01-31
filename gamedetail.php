<?php
require_once (__DIR__) . ('/config/config.php');
require_once (__DIR__) . ('/function/database.fn.php');
require_once __DIR__ . ('/function/games.fn.php');

$db = getPDOlink($config);


$games = findAllGames($db); 



$film = findGameById($db, $_GET['ID']);
$nom =  $jeu['nom'];

// foreach($jeux as $jeu) {
//     echo "
//         <div style='border:2px solid black'>
//             <h3>".$jeu['nom']."</h3> 
//             <p>Prix ".$jeu['prix']."</p>
//             <a href='' >Modifier</a>
//             <a href='' >Supprimer</a>
            

//         </div>
//         ";
        
// }
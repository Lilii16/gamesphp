<?php

function getPDOlink($config) {
    
    // DSN de connexion : -----> se cpnnecter à la base de données de là ***************
    //   $db = 'mysql:dbname=' . $config['dbname'] . ';host=' . $config['dbhost'] . ';port=' . $config['dbport'];


try{
    $db = new PDO('mysql:host=localhost;dbname=liste_jeux;charset=utf8',"root"); 

    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecting to database successfully";
    return $db;
}
catch(PDOException $e){  // ici on traque l'erreur 
    echo $e->getMessage() ;  //on affiche le message via la method getMessage 
}

$result = $db->query("SELECT * FROM jeux_video");   // Objet Php qui represente la table de jeux (pas encore exploitables)
$jeux = $result->fetchAll(PDO::FETCH_ASSOC); // tablau de jeux [] expooitable ==> qui dit tablau dit boucle 

}
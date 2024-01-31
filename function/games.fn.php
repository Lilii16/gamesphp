<?php 

function findAllGames ($db) {
    $sql = "SELECT * FROM `jeux_videos`;";
// Sélectionne toutes les colonnes de tous les films dans la table movies
    $requete = $db->query($sql);
// Execute la requete
    $jeux = $requete->fetchAll();
// Recupere les resultat dans le tableau $film
    return $jeux;
}

function findGameByID ($db, $currentID){
    $sql = "SELECT 
    jv.ID, jv.nom, jv.possesseur, jv.console, 
    jv.prix, jv.nbr_joueurs_max, jv.commentaires, 
    FROM jeux_video AS jv
    WHERE jv.ID = $currentID";
// Sélectionne plusieurs colonnes de la table movies, ainsi que le nom du réalisateur de
// la table director et le nom de la société de distribution de la table distribution_company,
// pour le film dont l’identifiant est $currentId

    $requete = $db->query($sql);
// Exécute la requête SQL sur la base de données

    $jeu = $requete->fetch();
// Récupère le résultat de la requête SQL. Le résultat est un tableau associatif où chaque clé est le nom d’une
// colonne sélectionnée par la requête SQL.
    return $jeu;
}
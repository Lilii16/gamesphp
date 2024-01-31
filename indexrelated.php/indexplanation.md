<?php

try{
    $conn = new PDO('mysql:host=localhost;dbname=liste_jeux;charset=utf8',"root","root"); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecting to database successfully";
}
catch(PDOException $e){  // ici on traque l'erreur 
    echo $e->getMessage() ;  //on affiche le message via la method getMessage 
}

$result = $conn->query("SELECT * FROM jeux_video");   // Objet Php qui represente la table de jeux (pas encore exploitables)
$jeux = $result->fetchAll(PDO::FETCH_ASSOC); // tablau de jeux [] expooitable ==> qui dit tablau dit boucle 

echo "<form>
        <input type=''>
    </form>";

foreach($jeux as $jeu) {
    echo "
        <div style='border:2px solid black'>
            <h3>Nom du jeu :".$jeu['nom']."</h3> 
            <p>Prix ".$jeu['prix']."</p>
            <a href='' >Modifier</a>
            <a href='' >Supprimer</a>
            

        </div>
        ";
        
}
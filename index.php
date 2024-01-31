 <?php
  require_once (__DIR__) . ('/function/games.fn.php');
 ?>
 
 <h1>Les jeux</h1>
  
  <?php
   $jeux = findAllGames($db); 
  ?>


<?php 

foreach($jeux as $jeu) {
  echo "
      <div style='border:2px solid black'>
          <h3>".$jeu['nom']."</h3> 
          <p>Prix ".$jeu['prix']."</p>
          <a href='' >Modifier</a>
          <a href='' >Supprimer</a>
          

      </div>
      ";
      
}

foreach ($jeux as $jeu) { ?>
    <p>
      <a href="gamedetail.php?id=<?= $jeu['ID'] ?>"><?= $jeu['nom'] ?></a>
    </p>
  <?php } 
  

?>

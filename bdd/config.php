<?php 
 require_once dirname(__DIR__) . ('/function/database.fn.php');

 $config = array(
  'dbhost' => 'localhost',
  'dbname' => 'dbmovie_utopia',
  'dbport' => '3306',
  'dbuser' => 'root',
  'dbpass' => ''
);
// c'est la configuration nécéssaire au PDO pour savoir que "c'est moi" et que je suis
//légitime d'aller chercher dans la base dedonnées que je lui demande.
//  $db = getPDOlink($config);
 //On defini nos variables d'environnement :
 
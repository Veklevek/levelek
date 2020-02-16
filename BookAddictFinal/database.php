
<?php
/*Lignes de commande connection a la base de donnée */
try{

$bdd = new PDO('mysql:host=localhost;dbname=id12599985_bibliotheque;charset=utf8', 'id12599985_veklevek', 'veklevek');
}

catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}


    
?>
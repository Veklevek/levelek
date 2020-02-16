<?php 
include("menu.php");
include("database.php");

//requete
    $requete = $bdd->query('SELECT DISTINCT prenom, nom, personne.id AS id_personne
                        FROM auteur
                        INNER JOIN personne ON auteur.idpersonne = personne.id');
   while($d = $requete->fetch()){
      
   //affichage et modification du style de infobook
   ?> 
   <p class="infobook" style=" border: 2px solid black;
    background-color: rgba(255, 255, 255, 0.8);
    height: 80px;
    font-size: 30px;
    "> Auteur :  <?php echo $d['prenom'] ." ". $d['nom'] ;?>  </p> <br>
   <?php
   }
    $requete->closeCursor(); 
    ?>
<?php
 include("menu.php");
?>
</br>
<p style="margin-left: 500px; font-size: 45px; color: white"> Ajouter une langue</p>
<div id="form" style=" border: 2px solid black;
    background-color: rgba(158, 125, 53, 0.30);
    align-content: center;">
<div id="center" style="margin-left:500px; font-size: 30px;color: white;">
<form action="" method="POST">
<label for="langue" name='langue'>Langue</label>
    <input type="text" id="txtMot" name='langue'placeholder="langue"> <br>
    

    <input type="submit" value="Ajouter la langue" id="btnValider"> <br> 
    </div>
</div>    


</form>
<script>
                                                var btnValider = document.getElementById('btnValider');
                                                btnValider.addEventListener("click" , valider);
                                                    function valider()  {
                                                            var txtMot = document.getElementById('txtMot');
                                                            
                                                            if(txtMot.value == "") {
                                                                alert("Tu t'es trompé ! ");
                                                            } else {
                                                                txtMot.readOnly = true ;
                                                            }
                                                          

                                                    }
                                    </script>
                                    
<?php
// Connexion à MySQL
$bdd=new PDO('mysql:host=localhost;dbname=id12599985_bibliotheque;charset=utf8', 'id12599985_veklevek', 'veklevek');
// vérification avec isset pour toute les données neccessaire + Transformer $_POST en variable simplifer
if( isset($_POST['langue'])){ 
   
   $langue = $_POST['langue'];
 
   
//requete
   $requete = $bdd->prepare("INSERT INTO langue(libelle)VALUES(?)");
    $requete->execute(array($langue));
    
   // var_dump($requete);
}


?>
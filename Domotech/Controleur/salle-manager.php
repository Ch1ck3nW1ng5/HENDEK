<?php


if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnAddSalle'])){
     dispAddCapteur();
  }

  if(isset($_POST['btnSuppSalle'])){
    dispSuppCapteur();
 }

}

function dispAddSalle(){
  include("../Modele/db-salle-manager.php");
  $resultat = addSalle($db,$_POST['maison'],$_POST['nom']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}
function dispSuppSalle(){
  include("../Modele/db-salle-manager.php");

  $resultat = delSalle($db, $_POST['salle']) ;
  echo ($resultat);

  header ("Location: $_SERVER[HTTP_REFERER]" ); // redirige l'utilisateur sur la page précédente
}

?>

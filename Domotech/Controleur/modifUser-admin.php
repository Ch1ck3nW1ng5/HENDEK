<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['btnModMail'])){
     majMail();
  }
  if(isset($_POST['btnModPrenom'])){
    majPrenom();
 }
 if(isset($_POST['btnModNom'])){
   majNom();
}
  if(isset($_POST['btnModTel'])){
    majTel();
 }
 if(isset($_POST['btnModMdp'])){
   include("../Modele/db-utilisateur-manager.php");
   if(($_POST['newMdp'])!=$_POST['confNewMdp']){
       $erreur = "La confirmation du mot de passe a échoué";
       echo($erreur);
     }
     else{ // si les mdp sont les memes
       $password = md5($_POST['newMdp']);
       $resultat = setMdp($db , $password , $_POST['btnModMdp']);
       echo ($resultat);
       header ("Location: $_SERVER[HTTP_REFERER]" );
     }
}

  if(isset($_POST['btnModStatut'])){
    include("../Modele/db-utilisateur-manager.php");
    $resultat = setStatut($db,$_POST['statut'] , $_POST['btnModStatut']) ;
    header ("Location: $_SERVER[HTTP_REFERER]" );
  }
}





function majMail(){
  include("../Modele/db-utilisateur-manager.php");
  $resultat = setMail($db , $_POST['modMail'] , $_POST['btnModMail']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function majPrenom(){
  include("../Modele/db-utilisateur-manager.php");
  $resultat = setPrenom($db , $_POST['modPrenom'] , $_POST['btnModPrenom']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}
function majNom(){
  include("../Modele/db-utilisateur-manager.php");
  $resultat = setNom($db , $_POST['modNom'] , $_POST['btnModNom']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function majTel(){
  include("../Modele/db-utilisateur-manager.php");
  $resultat = setTel($db , $_POST['modTel'] , $_POST['btnModTel']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

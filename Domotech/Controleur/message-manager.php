<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {

   if(isset($_POST['messageExt'])){
     sendExt();
  }

  if(isset($_POST['messageInt'])){
      sendInt();
  }

}




function sendExt(){
  include("../Modele/db-message-manager.php");
  $resultat = sendMessageExt($db,$_POST['mail'],$_POST['message'],$_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['objet']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

function sendInt(){

  include("../Modele/db-message-manager.php");
  include("../Modele/db-utilisateur-manager.php");
  session_start();
  $rslt = $db->query('SELECT id
  FROM utilisateurs
  WHERE identifiant = "'.$_POST['destinataire'].'"');
  $Dest=$rslt->fetch();
  $resultat = sendMessageInt($db, $_SESSION['userID'] , $Dest['id']  , $_POST['objet'], $_POST['message']);
  echo ($resultat);
  header ("Location: $_SERVER[HTTP_REFERER]" );
}

?>
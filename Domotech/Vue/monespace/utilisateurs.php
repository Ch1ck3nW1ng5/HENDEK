<div class=textedroite>
<h2>
   Liste des utilisateurs secondaires
</h2><br>
<?php
// SUPPR CAPTEUR
include_once("Modele/db-utilisateur-manager.php");
include ('Vue/listeusers.php') ?>

<br><br><br>
</div>

<!-- TODO LISTE + SUPPRIMER UTILISATEUR -->
<div class="conteneurBloc n2">
<h2>Ajouter un utilisateur</h2>


  <form method="post" action="Controleur/userSec-manager.php">
<p>
    <p class=formLabel><label for=username>Identifiant</label></p>
      <input type="text" name="username" required></p>
<p>
    <p class=formLabel><label for=mdp>Mot de Passe</label></p>
    <input type="password" name="mdp" required></p>

<p>
  <p class=formLabel><label for=statut>Statut</label></p>
  <select name="statut" required>
      <option class=formLabel value="" disabled selected></option>
        <option value="Utilisateur secondaire">Utilisateur secondaire</option>
        <option value="Enfant">Enfant</option>
        <option value="">...</option></br><br><br>
   </select></p>


      <p class=center>  <input class=bouttonBis name="btnAddUserSec" type="submit" value="ajouter l'utilisateur"/></p>

</form>
</div>

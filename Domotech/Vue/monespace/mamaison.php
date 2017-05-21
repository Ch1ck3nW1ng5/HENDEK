  <p class="boxtitle">
    Liste de vos maisons
  </p><br>

  <?php
  include("Modele/db-maison-manager.php");

  // SUPPRIMER UNE MAISON

  $reponse = $db->query('SELECT * FROM habitation'); ?>

   <form method="post" action="Controleur/delMaison.php">
    <p class=textedroite>
        <label class=formLabel>Choisissez la maison à supprimer</label><br /><br />

        <select name="delHabitation">
          <?php  while ($donnees = $reponse->fetch()) {?>
            <option value=<?php echo($donnees['ID'])?>><?php echo($donnees['nom'])?></option>
        <?php  }
        $reponse->closeCursor(); ?>
        <input type="submit" value="supprimer"/>
   </form>

        </select>
    </p>
<?php

// LISTE DES MAISONS

 include ('Vue/listemaisons.php') ?>

  <br><br><br>

<!-- AJOUTER UNE MAISON -->


<p class="boxtitle">
  Ajouter une maison
</p>
<form method="post" action="Controleur/addMaison.php">
   <p class="textegauche">
     <label class=formLabel for="adresse">Entrez l'adresse de votre maison</label><br /><br />
     <input type="text" name="adresse" required />
       </select>
   </p>

   <p class="textedroite">
       <label class=formLabel for="nom">Nommez votre maison</label><br /><br />
       <input type="text" name="nom" required />
   </p>
 <br><br><br><br><br>
   <p >
     <label class=formLabel for="superficie">Entrez la superficie de votre maison (en m²)</label><br /><br />
     <input type="text" name="superficie" required />
   </p>

<input type="submit" value="ajouter la maison"/>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] === 'POST') {
   if(!empty($_POST['salle'])){
    include("../Modele/db-capteur-manager.php");
    showAll($db,$_POST['salle'],$_POST['salleNom']);
  }else if (!empty($_POST['detailId'])){
    include("../Modele/db-capteur-manager.php");
    showDetail($db,$_POST['detailId'],$_POST['capteurNom']);

  }
}
function showDetail($db,$id,$nomCapteur){
  $result = getData($db,$id);
$result = $result->fetch(PDO::FETCH_ASSOC);

echo '<span class=boxtitle>'.$nomCapteur.'</span class=boxtitle> <br><br>';
?>

<script  type="text/javascript">
alert("txtUsername");
</script>

<?php
echo '<script type="text/javascript">document.write(myFunction(2,4))';
}


function showAll($db,$salle,$nomSalle){
    $result = getCapteursList($db,$salle);
  $nomSalle = str_replace("_"," ",$nomSalle);
    if ($result->rowcount()>0) {
      //DO::FETCH_ASSOC met le résultat dans un tableau associatif

      echo '<span class=boxtitle>'.$nomSalle.'</span class=boxtitle> <br><br>';
      echo "<div class='boxCapteur'>";

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
          $params = "detailId=".$row['id']."&capteurNom=". $row['type'];
          if($row['etat']==1){
            ?>
            <div class='boxCapteurElement boxElementMarche' onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton">

            <?php
          /*<a class='boxCapteurElement boxElementMarche' onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php')>
          <a class='boxCapteurElement boxElementArret' onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php')>
dessin("<?php echo($row['type']);?>")
          */
            echo "<p>Actif</p>";
          }else{
            ?>

            <div class='boxCapteurElement boxElementArret' onclick= envoiePhP("<?php echo($params)?>",'Controleur/display-capteur.php') class="boutton">

            <?php echo "<p>Inactif</p>";
          }

            echo "<p>" . $row['type'] . "</p>";
            $unit="";
            switch ($row['type']) {
              case 'Température':
              $unit = "°C";

                break;

              default:
                  $unit = "";
                break;
            }
            echo "<p>" . $row['valeur'] .$unit. "</p>";


            echo "<p>" . $row['temps'] . "</p>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "Pas encore de capteurs installés";
    }

  }
?>

  <div class="register">
    <?php  include("Controleur/addUser.php"); ?>
    <form method="POST">
        <div class="container">
          <label><b>Nom</b></label>
          <input type="text" placeholder="Nom" name="nom" required>
          <label><b>Prénom</b></label>
          <input type="text" placeholder="Prénom" name="prenom" required>
          <label><b>E-mail</b></label>
          <input type="email" placeholder="someone@example.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" required>
          <label><b>Téléphone</b></label>
          <input type="tel" placeholder="votre numéro de téléphone"  pattern="[+._%0-9]{9,11}$" name="tel" required>
          <label><b>Identifiant</b></label>
          <input type="text" placeholder="Identifiant" name="regUserName" required>
          <label><b>Mot de Passe</b></label>
          <input type="password" placeholder="Mot de Passe" name="regMdp" required>
          <button type="submit" name="btnRegister">Créer le compte</button>
        </div>
      </form>
    </div>

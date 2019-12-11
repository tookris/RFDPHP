<form action="index.php?page=contact" method="post">
  <fieldset>
    <legend>Donne-moi tes données</legend>
  <div>
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" />
  </div>
  <div>
    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" />
  </div>
  <div>
    <label for="mail">e-mail :</label>
    <input type="email" name="mail" id="mail" />
  </div>
  </fieldset>
  <fieldset>
  <div>
    <label for="msg">Message :</label>
    <textarea name="msg" id="msg"></textarea>
  </div>
  <div>
    <input type="submit" value="Clique-moi grand fou !" />
  </div>
  </fieldset>
  <input type="hidden" name="frmContact" />
</form>

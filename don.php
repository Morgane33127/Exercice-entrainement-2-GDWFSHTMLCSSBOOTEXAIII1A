<?php

require 'header.php';
require 'navigation.php';

?>

<section class="margin-top">
    <div class="container-fluid text-center">
      <h1 class="text-center">Faire un don</h1>
      <div class="row p-5 align-middle">
        <div style="width:40%;" class="mode-invisible">
          <canvas id="chart"></canvas>
          <h2 class="py-3">Merci à vous!</h2>
          <p>Grâce à vous nous avons déjà récolté 2000€!</p>
          <p>Prochain objectif : 5000€</p>
        </div>
        <div class="col participate">
          <h2 class="pb-3">Je participe</h2>
          <div class="container-fluid text-center">
            <label class="form-label" for="name1">Nom</label>
            <input class="form-control" type="text" id="name1" name="name" required>
            <label class="form-label" for="prenom1">Prénom</label>
            <input class="form-control" type="text" id="prenom1" name="prenom" required>
            <label class="form-label" for="mail1">E-mail</label>
            <input class="form-control" type="email" id="mail1" name="mail" required>
            <select class="form-select my-3" aria-label="Montant du don">
              <option selected>Choisir un montant</option>
              <option value="10">10€</option>
              <option value="20">20€</option>
              <option value="30">30€</option>
              <option value="40">40€</option>
              <option value="50">50€</option>
              <option value="60">60€</option>
            </select>
            <button type="button" class="btn btn-success mb-3">Valider</button>
            <p><small>En cliquant sur "Valider" vous aller être redirigé vers notre service de paiement.</small></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="container-fluid">
      <div class="row px-5 pb-5 align-middle">
        <div class="col-md-4">
          <h2 class="pb-3">Parrainer une ruche</h2>
          <p>Sélectionnez la ruche que vous souhaitez parrainer et recevez des photos + quelques pots de miel
            en récompense.</p>
          <img src="src/img/parrainerruche.png" alt="Parrainer une ruche" style="width:30%;">
          <button type="button" class="btn btn-success mb-3">Je parraine</button>
        </div>
        <div class="col-md-4">
          <h2 class="pb-3">Offrir une fleur</h2>
          <p>Aidez-nous en finançant des mètres carrés de fleurs, indispensables à nos petites butineuses.</p>
          <img src="src/img/offrirunefleur.png" alt="Offrir une fleur" style="width:30%;">
          <button type="button" class="btn btn-success mb-3">J'offre une fleur</button>
        </div>
      </div>
    </div>
  </section>

  <?php

require 'footer.php';

?>
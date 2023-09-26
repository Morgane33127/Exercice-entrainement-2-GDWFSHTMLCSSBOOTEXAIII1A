<?php

require 'header.php';
require 'navigation.php';

?>

<section class="pt-5">
            <div class="container-fluid text-center">
              <h1 class="text-center">Faire un don</h1>
                <div class="row p-5 align-middle">
                  <div style="width:40%;">
                    <canvas id="myBubble"></canvas>
                    <h2 class="py-3">Merci à vous!</h2>
                    <p>Grâce à vous nous avons déjà récolté 2 000€!</p>
                    <p>Prochain objectif : 5 000€</p>
                  </div>
                    <div class="col">
                        <h2 class="pb-3">Je participe</h2>
                    <div class="container-fluid text-center" style="width: 70%;">
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
              <div class="row p-5 align-middle">
                  <div class="col">
                    <h2 class="pb-3">Parrainer une ruche</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                      Facere vero modi incidunt deleniti eos ut quos autem minus dolor laudantium voluptate
                       dolorum iusto ipsum at praesentium totam, ullam impedit similique?</p>
                       <img src="img/parrainerruche.png" alt="La ruche association logo" style="width:50%;">
                       <button type="button" class="btn btn-success mb-3">Je parraine</button>
                  </div>
                  <div class="col">
                    <h2 class="pb-3">Offrir une fleur</h2>
                      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                        Facere vero modi incidunt deleniti eos ut quos autem minus dolor laudantium voluptate
                         dolorum iusto ipsum at praesentium totam, ullam impedit similique?</p>
                         <img src="img/offrirunefleur.png" alt="La ruche association logo" style="width:50%;">
                         <button type="button" class="btn btn-success mb-3">J'offre une fleur</button>
                  </div>
              </div>
          </div>
      </section>
      <?php

require 'footer.php';

?>
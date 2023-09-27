<?php

require 'header.php';
require 'navigation.php';

?>

<section class="container margin-top">
    <h1 class="text-center">A la une</h1>
    <div class="card-event-style card mb-3">
      <img src="src/img/event1.png" class="card-img-top" alt="Foire ô miel banner">
      <div class="card-body">
        <h3 class="card-title">Rendez-vous le 5 novembre 2023 pour la plus grande FOIRE Ô MIEL de France !</h3>
        <span class="badge bg-success mb-2">5 Novembre 2023</span>
        <p class="card-text">Sensibilisation au rôle des pollinisateurs, aux enjeux de la biodiversité, à la 
          qualité alimentaire et à la production locale.</p>
        <button type="button" class="btn btn-warning">En savoir plus</button>
      </div>
    </div>
</section>
  <article class="container mb-5">
    <h2 class="text-center pt-3">Autres évènements</h2>
    <div class="row justify-content-md-center">
      <div class="card-style card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">5ème Journée des Compagnons du Miel</h5>
          <span class="badge bg-success mb-2">5 octobre 2023</span>
          <p class="card-text">Rencontrer les apiculteurs, goûter au miel du territoire, et contribuer à la sauvegarde
            de la biodiversité.</p>
          <button type="button" class="btn btn-warning">En savoir plus</button>
        </div>
      </div>
      <div class="card-style card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">La journée mondiale des abeilles</h5>
          <span class="badge bg-success mb-2">20 mai 2024</span>
          <p class="card-text">Le 20 mai est officiellement la Journée Mondiale des Abeilles.</p>
          <button type="button" class="btn btn-warning">En savoir plus</button>
        </div>
      </div>
    </div>
  </article>

  <?php

require 'footer.php';

?>
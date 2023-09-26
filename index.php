<?php
require 'header.php';
require 'navigation.php';
?>
<header class="container-md">
<!-- Carousel-->
<div id="carouselExampleCaptions" class="carousel slide d-none d-md-block" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
      aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
      aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="src/img/ruche1.jpg" class="d-block w-100" alt="Essaim d'abeilles sur une ruche">
      <div class="carousel-caption d-none d-md-block">
        <h5>Luttons ensemble contre la perte de biodiversité</h5>
        <p>En France, depuis 1995, près de 30% des colonies d'abeilles disparaissent chaque année...</p>
        <a role="button" class="btn btn-success" href="don.php">Faire un don</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="src/img/abeille1.jpg" class="d-block w-100" alt="Abeille butinant une fleur vu macro">
      <div class="carousel-caption d-none d-md-block">
        <p>...et 85 % des plantes peuvent disparaitre en simultanée.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="src/img/event1-carousel.png" class="d-block w-100" alt="La Foire ô miel affiche evenement">
      <div class="carousel-caption d-none d-md-block">
        <a role="button" class="btn btn-success" href="event.php">Consulter</a>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précèdent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
    data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>
</header>
<section id="dons">
  <h2  class="text-center">Aidez-nous</h2>
  <div class="container-md">
      <div class="row justify-content-md-center">
          <div class="card card-style p-2 ms-4" style="width: 18rem; border:none;">
              <img src="src/img/parrainerruche.png" class="card-img-top card-mobile" alt="parrainer une ruche">
              <div class="card-body">
                  <h5 class="card-title">Parainer une ruche</h5>
                  <p class="card-text">Sélectionnez la ruche que vous souhaitez parrainer et recevez des photos + quelques pots de miel en récompense. </p>
                  <a href="#" class="btn btn-success">En savoir+</a>
              </div>
          </div>
          <div class="card card-style p-2 ms-4" style="width: 18rem; border:none;">
              <img src="src/img/offrirunefleur.png" class="card-img-top card-mobile" alt="Offrir une fleur">
              <div class="card-body">
                  <h5 class="card-title">Offrir une fleur</h5>
                  <p class="card-text">Aidez-nous en finançant des mètres carrés de fleurs, indispensable à nos petites butineuses.</p> <a href="#" class="btn btn-success">En savoir+</a>
              </div>
          </div>
          <div class="card card-style p-2 ms-4" style="width: 18rem; border:none;">
              <img src="src/img/faireundon.png" class="card-img-top card-mobile" alt="faire un don">
              <div class="card-body">
                  <h5 class="card-title">Faire un don</h5>
                  <p class="card-text">Contribuer à la sauvegarde des abeilles en nous rejoignant ou en faisant au don.</p>
                  <a href="#" class="btn btn-success">En savoir+</a>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="pt-5">
<!-- Presentation succinte-->
<div class="container-fluid">
  <div class="row p-5 align-middle">
      <div class="col">
          <p>Chaque année <b>30%</b> des colonies d’abeilles disparaissent en France et <b>53%</b> des plantes pollinisées par les insectes déclinent.</p>
          <p>C'est de se constat alarmant qu'est née <b>La Ruche</b>. <br> Notre mission : participer à la sauvegarde des abeilles et au développement des colonies.</p>
          <p>Si vous aussi vous vous sentez concerné et voulez nous aider vous pouvez :</p><h4>Nos actions</h4>
          <ul>
            <li>Parainer une ruche</li>
            <li>Contribuer au developpement de nos jardins grâce à notre action "Offrir une fleur"</li>
            <li>Nous rejoindre!</li>
          </ul>
          <button type="button" class="btn btn-warning">En savoir plus</button>
      </div>
      <div class="col text-center">
          <img src="src/img/laruche-logo.png" class="logo-style" alt="La ruche association logo" style="width:50%;">
      </div>
  </div>
</div>
</section>
<?php
require 'footer.php';
?>
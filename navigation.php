<?php

require 'header.php';

?>

<!-- Barre de nav-->
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid navigation">
      <div class="col-6">
        <a class="navbar-brand" href="index.php">
          <img src="src/img/laruche-logo.png" class="logo-style" alt="La Ruche association logo" width="70">
        </a>
        <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="col-6">
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active menu" aria-current="page" href="index.php">ACCUEIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="about.php">A PROPOS DE NOUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="events.php">EVENEMENTS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="don.php">NOUS SOUTENIR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link menu" href="contact.php">CONTACTEZ-NOUS</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <body id="body">
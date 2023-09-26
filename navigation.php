<?php
require 'header.php';
?>

<!-- Barre de nav-->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid navigation">
        <a class="navbar-brand" href="#">
            <img src="src/img/laruche-logo.png" class="logo-style" alt="La ruche association logo" width="100">
            <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          </a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link menu active" aria-current="page" href="index.php">ACCUEIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="about.php">A PROPOS DE NOUS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="events.php">EVENEMENTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="don.php">FAIRE UN DON</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu" href="contact.php">NOUS CONTACTER</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php

require 'header.php';
require 'navigation.php';

?>

<main class="container-md">
            <h1 class="text-center pt-3">Nous contacter</h1>
            <div class="container-md">
              <form method="POST" action="#">
                  <label class="form-label" for="name">Nom</label>
                  <input class="form-control" type="text" id="name" name="name" required>
                  <label class="form-label" for="prenom">Prénom</label>
                  <input class="form-control" type="text" id="prenom" name="prenom" required>
                  <label class="form-label" for="mail">E-mail</label>
                  <input class="form-control" type="email" id="mail" name="mail" required>
                  <label for="validationTextarea" class="form-label">Message : </label>
                  <textarea class="form-control" id="validationTextarea"></textarea>
                  <br>
                  <button type="submit" class="btn btn-success" name="Send">Envoyer</button>
              </form>
          </div>
          </main>
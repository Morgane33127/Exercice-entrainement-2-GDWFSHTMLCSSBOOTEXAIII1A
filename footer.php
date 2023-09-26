<footer id="footer">
  <h2 class="text-center pt-3">Contactez-nous</h2>
<div class="container-md">
  <form method="POST" action="#">
      <label class="form-label" for="name">Nom</label>
      <input class="form-control" id="name" type="text" name="name" required>
      <label class="form-label" for="prenom">Prénom</label>
      <input class="form-control" id="prenom" type="text" name="prenom" required>
      <label class="form-label" for="mail">E-mail</label>
      <input class="form-control" id="mail" type="email" name="mail" required>
      <label for="validationTextarea" class="form-label">Commentaire : </label>
      <textarea class="form-control" id="validationTextarea"></textarea>
      <br>
      <button type="submit" class="btn btn-success" name="Send">Envoyer</button>
  </form>
</div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>    
   const ttx = document.getElementById('myBubble');
   new Chart(ttx, {
    type: 'doughnut',
    data: {

    labels: [
      'Objectif',
      'Récolté'
    ],
    datasets: [{
      label: 'Fonds',
      data: [3000, 2000,],
      backgroundColor: [
        '#42413738',
        '#FFCC29',
      ],
      hoverOffset: 4
    }]
  }
      });</script>       
</body>
</html>
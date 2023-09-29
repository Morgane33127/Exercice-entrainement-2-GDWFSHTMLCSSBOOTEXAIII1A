<?php

require 'header.php';

?>

<footer id="footer">
    <h2 class="text-center pt-3"><a role="button" class="btn btn-success" href="contact.php">Contactez-nous</a></h2>
  </footer>
    <script src="src/bootstrap.bundle.min.js"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const ttx = document.getElementById('chart');
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
    });
  </script>

</body>

</html>
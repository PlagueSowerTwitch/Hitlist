<footer class="py-3 my-4">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="?page=accueil" class="nav-link px-2 text-body-secondary">Accueil</a></li>
      <li class="nav-item"><a href="?page=livret" class="nav-link px-2 text-body-secondary">Livret d'or</a></li>
      <?php if(!isset($_SESSION['nom'])) {  ?>
          <li class="nav-item">
            <a class="nav-link" href="?page=connexion">Connexion</a>
          </li>
          <?php } else { ?>
            <li class="nav-item">
            <a  class="nav-link" href=""><?=$_SESSION['nom']?></a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="?page=deconnexion">Deconnexion</a>
          </li>
          <?php } ?>
    </ul>
    <p class="text-center text-body-secondary">Guestbook, 32 Avenue de la république, Villejuif, 94800 – Tél. : 01 45 39 40 00</p>
  </footer>

</body>
</html>
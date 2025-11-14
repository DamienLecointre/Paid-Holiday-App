<?php get_header(); ?>
<main class="container">
  <?php
  $current_user = wp_get_current_user(); 
  if($current_user) {
    $prenom = $current_user->user_firstname ?: $current_user->user_login;
  }
  ?>

  <?php if (isset($_GET['success'])): ?>
    <div class="message success">Compte créé avec succès</div>
  <?php endif; ?>

  <!-- <div class="login-signup-container">
    <div class="login-wrapper">
      <div class="icon-container">
        <div class="icon-wrapper">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <form action="/paid-holiday-app/php/login.php" method="POST" class="login-form">
        <input name="email" type="text" placeholder="Email">
        <input name="password" type="password" placeholder="Mot de passe">
        <button id="signup-access" class="btn-blue-link">Pas encore de compte ?</button>
        <button type="submit" class="btn-blue-square-end">Se connecter</button>
      </form>
    </div>
    <div class="signup-wrapper">
      <div class="icon-container">
        <div class="icon-wrapper">
          <i class="fa-solid fa-xmark"></i>
        </div>
      </div>
      <form action="/paid-holiday-app/php/signup.php" method="POST" class="signup-form">
        <input name="prenom" type="text" placeholder="Prénom" required>
        <input name="nom" type="text" placeholder="Nom" required>
        <input name="email" type="email" placeholder="Email" required>
        <input name="password" type="password" placeholder="Mot de passe" required>
        <button id="login-access" class="btn-blue-link">Déjà inscrit ?</button>
        <button id="signup" type="submit" class="btn-blue-square-end">Créer mon compte</button>
      </form>
    </div>
  </div> -->

  <div class="container-wrapper">


    <!-- <div class="dates-selected-popup-container">
      <form action="">
        <input type="date" name="" id="">
        <input type="date" name="" id="">
      </form>
    </div> -->

    <div class="left-container">
      <div class="title-container">
        <h1>Bienvenue sur ton tableau de bord</h1>
      </div>
      <div class="card">
        <div class="overview-header-container">
          <h2>Vue d'ensemble</h2>
          <div class="legend-container">
            <div class="legend-wrapper">
              <div class="color-legend"></div>
              <h5>Congés à venir</h5>
            </div>
            <div class="legend-wrapper">
              <div class="color-legend"></div>
              <h5>Congés pris</h5>
            </div>
            <div class="legend-wrapper">
              <div class="color-legend"></div>
              <h5>Maladie</h5>
            </div>
          </div>
          <button class="btn-blue-rounded-end">Mode liste</button>
        </div>
        <div class="calendar-container">
          <div id="calendar"></div>
        </div>
      </div>
    </div>

    <div class="right-container">
      <div class="card">
        <div class="header">
          <i class="fa-regular fa-bell icon"></i>
          <?php if ($prenom): ?>
            <div class="avatar-container">
              <h4 class="title"><?php echo esc_html(ucfirst($prenom)); ?></h4>
              <div class="avatar">
                <i class="fa-regular fa-user"></i>
              </div>
            </div>
          <?php else: ?>
            <a class="btn-blue-rounded-end" href="<?php echo wp_login_url()?>">Se connecter</a>
            <!-- <button id="login" class="btn-blue-rounded-end">Se connecter</button> -->
          <?php endif ?>
        </div>

         <div class="profil-container">
          <h5 class="link">profil</h5>
          <div class="logout-container link">
            <i class="fa-solid fa-power-off"></i>
            <a href="<?php echo wp_logout_url()?>">Se déconnecter</a>
          </div>
        </div>

        <div class="title-container">
          <h2>L'essentiel</h2>
        </div>
        <div class="graph-container">
          <div class="graph">
            <canvas id="myDoughnutGraph" width="150" height="150"></canvas>
            <h3 class="graph-number">18/25</h3> <!-- 18=VALEUR DYN -->
          </div>
          <div class="graph-legend">
            <div class="color-legend"></div>
            <h5>Congés restants</h5>
          </div>
        </div>
        <div class="reminder-container">
          <h4>Petit rappel :</h4>
          <div class="reminder-card-container">
            <h5>Tes prochaines vacances :</h5>
            <p>Du <span>06/07/2025 </span> au <span>10/07/2025</span></p>
          </div>
        </div>
        <div class="btn-submit-container">
          <button type="submit" class="btn-submit">Demander mes congés</button>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
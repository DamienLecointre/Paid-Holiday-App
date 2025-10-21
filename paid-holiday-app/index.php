<?php get_header(); ?>
<main class="container">
  <div class="container-wrapper">

    <div class="left-container">
      <div class="title-container">
        <h1>It's time to chill !!!</h1>
      </div>
      <div class="card"></div>
    </div>

    <div class="right-container">
      <div class="card">
        <div class="header">
          <div class="icon-container">
            <i class="fa-solid fa-power-off icon"></i>
            <i class="fa-regular fa-bell icon"></i>
          </div>
          <div class="avatar-container">
            <h4 class="title">PRENOM</h4> <!-- PRENOM=VALEUR DYN -->
            <div class="avatar"></div>
          </div>
        </div>
        <div class="title-container">
          <h2>L'essentiel</h2>
        </div>
        <div class="graph-container">
          <div class="graph">
            <h3 class="graph-number">18/25</h3> <!-- 18=VALEUR DYN -->
          </div>
          <div class="graph-legende">
            <div class="color-legende"></div>
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
        <button type="submit" class="btn-submit">Demander mes congés</button>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
<?php
/**
 * Template Name: Accueil
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <header class="banner">
    <h1 class="site--title"><span class="textcolor">Plans 3D</span>, rendus intérieurs et extérieurs en haute qualité, <span class="textcolor">simplement et rapidement</span></h1>
    <ol class="step--list">
      <li class="step--item">Dessiner votre projet</li>
      <li class="step--item">Meubler et décorer</li>
      <li class="step--item">Obtenez des rendus étonnants</li>
    </ol>
    <div class="cta">
      <a href="#" class="button accent try">Essai gratuit</a>
      <span class="picto"></span>
      <a href="#" class="button">présentation vidéo</a>
    </div>
  </header>

  <section class="demonstration section">
    <div class="demonstration--wrapper">
      <div class="demonstration--column text-center">
        <h2>Ces images peuvent êtes faites <strong>en moins de <span class="textcolor">20 minutes</span></strong><br><span class="textcolor">vous voulez savoir comment ?</span></h2>
      </div>
      <div class="demonstration--column">
        <div class="owl-carousel">
          carousel
        </div>
      </div>
    </div>
  </section>

  <section class="secteurs">
    <div class="tablet">
      <h2 class="tablet--title">Facile, rapide et de haute qualité</h2>
      <p class="text-center">My Sketcher est le moyen le plus <strong>facile</strong> et le <strong>meilleur</strong> de créer des modèles de maison et de plans en ligne. <br>En quelques clics, vous pouvez dessiner votre plan avec plus de 1000 items et matériaux et générer des <strong>rendus 3D haut de gamme</strong>.</p>
      <ul class="secteurs--list">
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Constructeur de maisons</h3>
          </a>
        </li>
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Rénovation</h3>
          </a>
        </li>
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Décoration</h3>
          </a>
        </li>
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Immobilier</h3>
          </a>
        </li>
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Aide à la vente</h3>
          </a>
        </li>
        <li class="secteurs--item">
          <a class="secteurs--link" href="#">
            <img src="" alt="">
            <h3 class="secteurs--title">Architecture</h3>
          </a>
        </li>
      </ul>
    </div>
  </section>

  <section class="section step">
    <ol class="step--list">
      <li class="step--item">
        <img src="" alt="plan">
        <h2 class="step--title">Dessinez vos plans facilement et rapidement</h2>
        <p>Créez votre plan dans un éditeur 2D clair en intégrant des cloisonnements, des mezzanines, des pentes de toits et en ajoutant des ouvertures personnalisables.</p>
      </li>
      <li class="step--item">
        <img src="" alt="cananpé">
        <h2 class="step--title">Concevez votre intérieur en quelques clics</h2>
        <p>Votre plan est prêt, vous pouvez le modifier avec des milliers de produits et matériaux de notre catalogue et génériques.</p>
      </li>
      <li class="step--item">
        <img src="" alt="rendu 3D">
        <h2 class="step--title">Générez des photos 3D de haute qualité</h2>
        <p>Obtenez une qualité de rendu stupéfiante en moins de 1 min. Choisissez juste votre point de vue et votre environnement; nous calculons votre photo en moins de 1 min!</p>
      </li>
    </ol>
  </section>

  <section class="section help">
    <div class="row">
      <div class="columns medium-6">photos</div>
      <div class="columns medium-6">
        <h2>Besoin d'aide pour réaliser vos plans ?</h2>
        <ul class="menu vertical">
          <li><a href="#">Accédez au forum</a></li>
          <li><a href="#">Consultez les tutoriels</a></li>
          <li><a href="#">Contactez-nous</a></li>
        </ul>
      </div>
    </div>
  </section>

  <section class="section why">
    <h2 class="text-center">Pourquoi devriez-vous utiliser My Sketcher ?</h2>
    <div class="row">
      <div class="columns medium-6">
        <ul class="why--list">
          <li>La façon la plus facile et la plus rapide de produire des plans d'architecte et des rendus intérieurs 3D</li>
          <li>Aucune formation nécessaire</li>
          <li>Pas besoin de télécharger et d'installer quoi que ce soit</li>
          <li>Options de rendu avancées pour un travail professionnel</li>
          <li>Un résultat professionnel en quelques minutes</li>
        </ul>
      </div>
      <div class="columns medium-6">

        <ul class="why--list">
          <li>La meilleure qualité de rendu au monde pour un logiciel de plan</li>
          <li>+ de 1000 articles et matériaux personnalisables de haute qualité pour personnaliser votre intérieur</li>
          <li>Rendus intérieurs et extérieurs</li>
          <li>Payer ce que vous utilisez</li>
        </ul>
      </div>
    </div>
  </section>
<?php endwhile; ?>

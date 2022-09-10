<?php
include_once __DIR__."../../public/templates/inc/header.tpl.php";
include_once __DIR__."../../php/class/Article.php";
include_once __DIR__."../../php/dataArticle.php";
?>

<div class="segment">
<h1 class="content__title">NOS DERNIÈRES ACTUS</h1>
<h2 class="content__subtitle"> Trophée Pauline Lacaton Août 2022</h2>
<p>Les Barbu's ont participé au trophée Pauline Lacaton organisé par les Lynx Loisirs de Valence. Ils finissent sur le podium à la 3ème place. Merci au  Lynx Loisirs Adultes pour l'organisation, c'était tout simplement parfait.</p>
</div>

<section class="slider">
<button class="btn slider__btn" type="button" aria-label="Précédent">&lt;</button>
<button class="btn slider__btn" type="button" aria-label="Suivant">&gt;</button>
</section>

<section class="segment">
<h2 class="segment__title">Actus </h2>
<div class="cards">
  
  <?php foreach($articlesList as $articleId => $article) : ?>
  <article class="card">
    <div class="card__content">
      <img class="card__image" src="images/<?=$article->getHomeImage()?>.jpg" alt="Tournoi de Chamrousse">
      <h3 class="card__title"><?= $article->getTitle() ?></h3>
      <p class="card__desc"><?= $article->getContent() ?> </p>
    </div>
    <div class="card__action">
      <button class="btn btn__like" type="button" aria-label="J'aime"><i class="icon-heart"></i></button> <a class="btn" href="">Découvrir</a>
    </div>
  </article>
  <?php endforeach; ?>

</div>
</section>

<?php
include_once __DIR__."../../public/templates/inc/footer.tpl.php";
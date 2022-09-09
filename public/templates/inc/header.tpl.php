<?php
$nav = [
  "Accueil" => "./index.php",
	"L'équipe" =>"./l_equipe.php",
	"Contact" => "./contact.php",
  "Mentions légales" => "./mentions_legales.php",
]
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les Barbu's</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">

  <script defer src="../js/app.js"></script>
  <script defer src="../js/slide.js"></script>
  <script defer src="../js/theme.js"></script>
  
</head>
<body>

  <header class="header">
    <nav>
      <div class="header__part">
        <div class="container">
          <div class="header__flex">
            <a class="logo" href="">
              <img class="logo__image" src="images/logo-barbus.jpg" alt="logo barbus">
              <span class="logo__title">Les Barbu's Glace & Roller Hockey</span>
            </a>
            <div class="menu">
              <!--<a class="menu__item" href=""><i class="icon-heart"></i> Favoris</a>
              <a class="menu__item" id="yClickLa" href=""><i class="icon-mail"></i> Newsletter</a>
              <a class="menu__item" href=""><i class="icon-check-circle"></i> Avis</a>-->
              <button id="theme-switch" class="btn" type="button" aria-label="Changer le thème"><i class="icon-moon"></i></button>
              <div class="menu__color-switcher">
                <button id="theme-green" class="theme-button" type="button" aria-label="Changer la couleur du thème"></button>
                <button id="theme-red" class="theme-button" type="button" aria-label="Changer la couleur du thème"></button>
                <button id="theme-blue" class="theme-button" type="button" aria-label="Changer la couleur du thème"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header__part">
        <div class="container">
          <div class="submenu">
            <?php 
            foreach($nav as $label => $lien):
            ?>
            <a class="submenu__item " href="<?= $lien ?>"><?= $label ?></a>
            <?php endforeach ?>
            <!--
            <a class="submenu__item submenu__item--current" href="">L'équipe</a>
            -->
          </div>
        </div>
      </div>
    </nav>
  </header>

  <main class="container">
    <div class="content">
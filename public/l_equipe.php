<?php
include_once __DIR__."../../public/templates/inc/header.tpl.php";
include_once __DIR__."../../php/class/Player.php";
include_once __DIR__."../../php/data.php";
?>
<section class="segment">
    <h2 class="segment__title">L'équipe :</h2>
    <div>
        <img src="images/img-l-equipe.jpg" alt="photo Team barbu's à la création">
    </div>
    <!-- mise en place avant optimisation dans une boucle -->
    <div class="cards">
        <?php foreach($playersList as $playerId => $player): ?>
        <article class="card">
            <div class="card__content">
                <img class="card__image" src="images/pres-<?=$player->getImage() ?>.jpg" alt="<?= $player->getName() ?>">
                <h3 class="card__title"><?= $player->getRole() ?> : <?= $player->getJerseyNumber() ?> <?= $player->getName() ?></h3>
            </div>
        </article>
        <?php endforeach; ?>
    </div>
</section>

<?php
include_once __DIR__."../../public/templates/inc/footer.tpl.php";
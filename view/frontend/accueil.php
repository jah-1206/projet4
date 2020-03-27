<?php $title = 'Accueil';
ob_start();
?>
<section id="presentation">
    <img id="banniere" class="d-none d-lg-block"src="public/images/header.jpg" alt="empty road and railroad at night">
    <div id="header-text">
        <h1 class="display-4 animated fadeInDown slow">Billet simple pour l'Alaska - Jean Forteroche</h1>
        <br>
        <p class="lead animated fadeIn delay-2s slow">Adepte des nouvelles technologies, je vous propose un nouveau concept : celui de publier mon livre chapitre
        par chapitre, directement en ligne. Un peu comme une série en fait !</p>
        <h2 class ="h1 mt-4 animated fadeIn delay-3s slow"><a href="article.php?id=1"> Rendez-vous ici pour commencer l'histoire...</a></h2>
        </div>
</section>
<hr class="hr-text m-5" data-content="Dernier article">
<section id="last-article">

    <!-- Get the last article published -->
    <article class="article">
        <h2 class="h1"><a href="article.php?id=<?=$article['id']?>"><?=$article['title'];?></a></h3>
        <p class="m-3">Publié le <?=$article['date_posted'];?> , par <?=$article['author'];?></p>

        <p><?=nl2br(htmlspecialchars($article['content']));?></p>
    </article>
</section>
<hr class="hr-text m-5" data-content="Mes autres livres">
<section id="books">
    <div id="cards" class="d-flex flex-column flex-xl-row align-items-center justify-content-around">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Le Palais de la Lune</h5>
                <p class="card-text text-dark">Éditions Actes Ouest <br> 19.90€</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Alice sur le fil</h5>
                <p class="card-text text-dark">Éditions Actes Ouest <br> 19.90€</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
        <div class="card">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Les rêves rouges</h5>
                <p class="card-text text-dark">Éditions Actes Ouest <br> 19.90€</p>
                <a href="#" class="btn btn-primary">Voir plus</a>
            </div>
        </div>
    </div>
</section>

<hr class="hr-text">

<?php $content = ob_get_clean();
require 'template.php';
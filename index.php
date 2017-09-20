<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Accueil | BugBurger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <!-- includes NavigationBar -->

    <?php
    include('./includes/nav.php');
    ?>

    <!-- Jumbotron -->
    <div class="jumbotron jumbotronHeader">
        <div class="container-fluid">
            <div class="container-fluid description">
                <div class="accrocheHeader">
                    <h1>Bug Burger, restaurant d’insectes.</h1>
                    <p> Une expérience délicieuse pour vous, et bonne pour la planète aussi !</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Conteneur General ( all the sections of the Home page ) -->
<div class="container-fluid">

    <!-- Section Arguments -->
    <section id="ArgumentsRow">
        <div class="containerArg">
            <article class="itemArg">
                <i class="fa fa-leaf fa-5x logoArg" aria-hidden="true"></i>
                <h4>Une alternative écologique</h4>
            </article>
            <article class="itemArg">
                <i class="fa fa-rocket fa-5x logoArg" aria-hidden="true"></i>
                <h4>Un concept innovant</h4>
            </article>
            <article class="itemArg">
                <i class="fa fa-bug fa-5x logoArg" aria-hidden="true"></i>
                <h4>Une expérience inédite</h4>
            </article>
        </div>
    </section>

    <!-- Section About us -->
    <section class="row conceptDescription">

        <h2>Qu'est que c'est cette histoire de burger aux insectes ?</h2>
        <p>
            Depuis des années, Laurent et Damien étudient la possibilité de proposer une alternative savoureuse à la viande …
            grâce aux insectes. Et oui, c’est possible ! Dans de nombreux pays, les insectes font partie de la cuisine quotidienne.
            Pourquoi pas chez nous ? En plus, les insectes sont une excellente alternative à la viande : leur élevage est moins polluant,
            et les qualités nutritives sont équivalentes. Après avoir cherché la recette du burger parfait, nous avons imaginé une chaîne de
            restaurants accueillante, ouverte à tous, proposant des menus délicieux et nourrissants, riches en protéines.
        </p>

    </section>
    <section>

    </section>

    <!-- Section Our best burgers -->
    <section class="row conceptDescription">

        <h2>Les recettes de nos burgers</h2>
        <p>New York, Paris, Bangkok … Nous avons traversé la planète pour trouver les meilleures recettes de burgers, dont les insectes en sont
            les ingrédients principaux. Nous avons à coeur de favoriser des produits frais et locaux, que ce soit pour les légumes que pour le fromage.
            Et évidemment, nos insectes sont élevés en France, nourris avec des végétaux bio. Nous respectons toutes les normes environnementales,
            pour diminuer notre empreinte carbone.
        </p>

    </section>
    <section>

    </section>
    <!-- Our restaurants Gallery -->
    <section class="jumbotron jumbotronEcologie">

        <h2>8 restaurants en France </h2>
        <p>Vous pouvez nous trouver dans quelques villes en France. S’il n’y a pas encore de Bug Burger à côté de chez vous, patience !
            D’ici 2018, nous aurons envahi tout le pays. En attendant, rendez-vous dans l’un de nos 8 Bug Burgers.
            Renseignez-vous grâce à notre carte interactive ou directement sur les pages des restaurants concernés !
        </p>

    </section>


    <section>
        <div>
            <h2>Trouvez votre restaurant BugBurger : </h2>
        </div>
        <div class="containerMaps">
            <div id="map-canvas-left"></div>
        </div>
    </section>

</div> <!-- End container General -->


<!-- Includes footer ( with form contact ) -->

<?php
include('./includes/footer.php');
?>

<script type="text/javascript" src='script/maps.js'></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhrQmUoK-VRkBU9oUqkUWQVOwp3l1Emzw&callback=initialize"></script>
<script src='script/app.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
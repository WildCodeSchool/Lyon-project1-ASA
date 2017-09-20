<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <!-- TEST AJOUT FONT UBUNTU -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Concept | BugBurger</title>
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

</header>

<!-- Conteneur General ( all the sections of the Home page ) -->
<div class="container-fluid">

    <div class="jumbotron jumbotronConcept">
        <div class="container">
            <h1 class="display-3">Déguster des insectes : une délicieuse alternative écologique</h1>
            <p class="lead">Manger des insectes ? Bizarre, cocasse, farfelu, pensez-vous… Et pourtant, il n’y a pas si longtemps, il paraissait inconcevable de manger de la pomme de terre, du homard ou des sushis… Aujourd’hui, nous en raffolons ! L’insecte est la prochaine révolution alimentaire : prenez-y part !
            </p>
        </div>
    </div>
    <section class="container">
        <div class="row conceptDescription">
            <h2>Pourquoi manger des insectes ?</h2>
            <p>Il existe de très nombreuses raisons de consommer des insectes; non seulement ils sont bons pour votre santé avec des apports nutritionnels importants mais leur élevage permet de préserver notre planète ! </p>
            <p>Les insectes sont une source importante de protéines – plus importante même que celles des viandes dites « classiques » ! Savez-vous par exemple que manger 5 criquets suffit pour avoir l’équivalence en termes de protéines d’un steak de boeuf entier?! </p>
        </div>

        <div class="row conceptDescription">
            <h2>Un apport nutritionnel sans précédent</h2>
            <p>Les insectes sont aussi une source importante de vitamines, omégas 3 et 6, et minéraux.
            </p>
            <p>Les insectes contiennent également moins de graisses que les autres types de viandes : ils contiennent en moyenne 16% de matières grasses, contrairement à la viande traditionnelle qui en contiendraient près de la moitié (48% en moyenne).
            </p>
            <p>Les insectes sont également source de glucides, c’est-à-dire qu’ils apportent de l’énergie, nécessaires pour le fonctionnement de notre organisme – contrairement à la viande « traditionnelle » qui n’en possède pas.
            </p>
        </div>
    </section>

    <?php

    include('./includes/argumentsBarConcept.php');

    ?>

    <section class="jumbotron jumbotronEcologie">
        <div class="container">
            <h2 class="display-3">Une solution écologique pour notre planète</h2>
            <p class="lead">Sur le plan écologique, les insectes ont un taux de croissance très rapide et leur élevage est facile et peu coûteux : peu gourmands en nourriture, 2 kg d’aliments seulement sont nécessaires pour produire 1 kg d’insectes, alors que les bovins en exigent 8 kg pour produire cette même quantité. <br/>
                L’élevage industriel d’insectes comestibles a de nombreux avantages : peu gourmands en nourriture et en eau, les insectes s’élèvent en étages et ne rejettent que très peu de gaz à effet de serre. De plus, alors que seulement 5 mètres carrés sont nécessaires pour élever 100 kilos d’insectes, 50 mètres carrés sont nécessaires pour produire la même quantité de viande de bœuf !

            </p>
        </div>
    </section>

</div> <!-- End container General -->


<!-- Includes footer ( with form contact ) -->

<?php

include('./includes/footer.php');

?>

<script src='script/app.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
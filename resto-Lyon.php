<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Lyon | BugBurger</title>
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
    <section class="name_restaurant">
        <div class="restaurant_city">
            <h2 class="title_city">Manger un Bug Burger à Lyon</h2>
        </div>
        <?php
           // include('./includes/workInProgress.php');
        ?>
    </section>
    <section class="single_restaurant_map">
        <!-- INSERER UNE GOOGLE MAP CENTREE SUR LE RESTO SOLO -->

    </section>
    <section class="detail_restaurant">
        <div class="row detail_single_restaurant">
            <div class="col-md-5">
                <a class="timetable">Horaires d'ouverture :</a>
                <ul>
                    <li>Lundi : fermé</li>
                    <li>Mardi à Samedi : 11:00-14:00, 18:30-22:00</li>
                    <li>Dimanche : 18:00-22:00</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Bug Burger - Lyon</h3>
                <address>
                    <span class="addr">17 rue Delandine<br>69002 Lyon</span>
                    <span class="phone">
                        <abbr title="Téléphone">Tél.</abbr>
                        <a class="phone" href="tel:0478000000"> 04 78 00 00 00</a>
                    </span>
                </address>
                <p class="description">Au coeur du nouveau quartier né de la réhabilitation de la prison Saint Paul, le Bug Burger vous accueille dans une ambiance chaleureuse et feutrée, idéale pour les repas en famille, entre amis ou pour une pause déjeuner conviviale et originale.</p>
            </div>

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
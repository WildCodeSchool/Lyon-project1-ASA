<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logoBUG.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Restaurants | BugBurger</title>
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

    <section>
        <div class="row">
            <div class="col-md-12">
                <H1>Nos Bug Burgers, partout en France</H1>
                <p>Vous avez envie d'un bon burger plein de fromages et de fourmis grillées ? On vous comprend! Découvrez l'un de nos restaurants près de chez vous :</p>
                <ul>
                    <li>Lyon</li>
                    <li>Paris</li>
                    <li>Strasbourg</li>
                </ul>
            </div>
        </div>


        <div class="row">
            <div class="page-header">
                <h1>Bug Burger de Lyon<small>Le meilleur fast-food du 6ème arrondissement</small></h1>
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
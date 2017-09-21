<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
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
        <!--§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§! -->
        <div class="jumbotron jumbotronBurger">
            <div class="container">
                <h1>Nos Bug Burgers, partout en France</h1>
                <p>Vous avez envie d'un bon burger plein de fromages et de fourmis grillées ? On vous comprend! Découvrez l'un de nos restaurants près de chez vous :</p>
            </div>
        </div>
        <div class="row">
        <?php
        $restos = include("includes/dataresto.php");
        foreach ($restos as $resto): ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/<?php echo $resto['img']; ?>" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <div class="col-md-6">
                                <a href="resto.php?ville=<?php echo $resto['ville']; ?>">
                                    <p><?php echo $resto['titre']; ?></p>
                                </a>
                                <p><?php echo $resto['adresse']; ?></p>
                                <p><?php echo $resto['cp'] ." " .  $resto['ville']; ?></p>
                                <p> <a href="tel:<?php echo $resto['tel']; ?>"><?php echo $resto['tel']; ?></a></p>
                            </div>
                            <div class="col-md-6">
                                <p><?php echo $resto['description']; ?></p>
                                <p><a href="resto.php?ville=<?php echo $resto['ville']; ?>" class="btn btn-default" role="button">En savoir plus</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </section>
    <section>
            <div class="titleMaps">
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
<script type="text/javascript" src='script/app.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
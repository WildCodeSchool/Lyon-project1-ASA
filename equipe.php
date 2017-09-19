<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Equipe | BugBurger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="styleOthers/equipe.css">
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
    <section class="containerFounder">
        <h2>Rencontrez notre équipe</h2>
        <div class="row">
            <div class="col-md-5 col-md-offset-1">
                <div class="col-md-7">
                    <p><span class="founder_bernard">Bernard Nardbé, </span><br/>chercheur en insectes,</p>
                    <i class="fa fa-quote-left" aria-hidden="true"> Je suis passionné depuis toujours par les insectes ! A 5 ans, je les écrasais avec les doigts, à 50 ans, je les sers à manger !</i>
                </div>
                <div class="col-md-4">
                    <img class="founder-photo" src="./images/laurent.jpg" alt="photo de Bernard Nardbé" title="photo de Bernard Nardbé">
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <img class="founder_hippo" src="./images/damien.jpg" alt="photo de Hippolyte Rametoujours" title="photo de Hippolyte Rametoujours">
                </div>
                <div class="col-md-7">
                    <p><span class="founder-name">Hippolyte Rametoujours, </span>startupeur à vie,</p>
                    <i class="fa fa-quote-left" aria-hidden="true"> J’adore les nouveaux challenges, surtout quand ils font parler de moi.</i>
                </div>
            </div>
        </div>

    </section>
    <section class="containerTeam">

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/chief.jpg" alt="photo de Louis Tremblay">
                    <div class="caption">
                        <h3>Louis Tremblay</h3>
                        <p>Chief<br/><i class="fa fa-quote-left" aria-hidden="true"> J'aime les burgers et j'aime les insectes, ça tombe bien !</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/manager.jpg" alt="photo de Louis Gagnon">
                    <div class="caption">
                        <h3>Louis Gagnon</h3>
                        <p>Restaurant Manager<br/><i class="fa fa-quote-left" aria-hidden="true"> Ma vie, c'est le burger</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/manager2.jpg" alt="photo de Quentin Roy">
                    <div class="caption">
                        <h3>Quentin Roy</h3>
                        <p>Restaurant Manager<br/><i class="fa fa-quote-left" aria-hidden="true"> Moi, ce que j'aime c'est quand on me dit que c'est délicieux !</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/eleveurs.jpg" alt="photo des éleveurs d'insectes">
                    <div class="caption">
                        <h3>Eve et André Fortin</h3>
                        <p>Eleveurs d'insectes<br/><i class="fa fa-quote-left" aria-hidden="true"> Nos insectes, on les élève comme nos enfants !</i></p>
                    </div>
                </div>
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